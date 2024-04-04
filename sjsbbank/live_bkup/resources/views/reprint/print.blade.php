@extends('layouts.master')

@section('body')
	<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Reprint Cheques</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Reprint Cheques</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Print</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Products-->
                            <div class="card card-flush">
                                
                                <!--begin::Card body-->
                                <div class="card-body pt-0 table-responsive mt-5">
                                    <p id="data" style="color: #000;font-size: 15px;"></p>

                                    <div class="loader" id="loader">
                                        <br>
                                        <p style="font-size:22px;">Please wait...</p>
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Products-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
               
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
@endsection


@push('scripts')
	<script>
		const socket = new WebSocket('ws://localhost:5000');
        var isCheck = 'pending';
        socket.addEventListener('open', function (event) {
            // console.log('Connected to the WS server!');
            isCheck = 'complete';
        });

        socket.addEventListener('close', function (event) {
            // console.log('disconnected to the WS server!')
            alert('disconnected to the WS server!')
            $('#loader').addClass('d-none');
        });

        /*socket.addEventListener('message', function(event){
            console.log('2nd event?', event.data)
        });*/

        socket.addEventListener('message', function (event) {
            var obj = JSON.parse(event.data);
            console.log('Msg from server: ', event.data)
            // document.getElementById('response').innerHTML = event.data
            if(obj.statusCode != 200 && obj.status != "Success"){
                var myarr = obj.payload._id.split(":")
                if(myarr[1] != "")
                {
                    console.log(myarr[1]+'myarrdata');
                    callPrinterIssueFunction(myarr[1], obj.message);
                }
            }
            // $('#response').append(event.data);
            // document.getElementById('printer_btn').removeAttribute("disabled")
            // document.getElementById('printer_btn').innerHTML = "Print Next"
        });
        
        let myInterval;
        function checkPrint(){
            // callPCPPrint()
            if(isCheck == "complete"){
                clearInterval(myInterval)
                callPCPPrint()
            }else{
                myInterval = setInterval(function(){ 
                        checkPrint() 
                    }, 500);
            }
        }

        function sendDataToPCP(pdf_base64, printer_name, file_name, tray, collectionId='') {
            var obj = {
                "_id": "new ObjectId(\"641840dd573d2b60d5b5dd05\"), collectionId:"+collectionId,
                "pdf_base64": pdf_base64,
                "name": file_name,
                "isPrinted": "false",
                "printerName": printer_name,
                "tray": tray
                // "collectionId": collectionId
            }
            console.log(obj)
            socket.send(JSON.stringify(obj))
        }

      

        window.addEventListener("load", (event) => {
            checkPrint();
        });

        function callPrinterIssueFunction(id, message){
            $.ajax({  
                url: '/reprint-cheque/removeReprintCollection',  
                type: 'post',
                data: {id:id},
                success: function(data) {
                    if(data.status == 200)
                    {
                        $('#data').html(message)
                        window.scrollTo(0, -document.body.scrollHeight);
                    }  else{
                        $('#data').html('Something went wrong')
                    }
                }  
            });
        }

        function callPCPPrint(){
            var urlParams = window.location.search;
            $.ajax({  
                url: '/reprint/cheque'+urlParams,  
                type: 'get',
                success: function(data) {
                    if(data.status == 200)
                    {
                        let slip = `slip${data.message.rand}.pdf`;
                        let cheque = `cheque${data.message.rand}.pdf`;
                        $('#data').append(data.message.data);
                        
                        if(data.message.isPrintSlip == "1")
                        {
                            sendDataToPCP(data.message.slippdf, data.message.printer, slip, data.message.sliptray, data.message.insertid);           
                        }
                        if(data.message.isPrintCheque == "1"){
                            sendDataToPCP(data.message.chequepdf, data.message.printer, cheque, data.message.chequetray, data.message.insertid);
                        }
                        if(data.message.isPrint)
                        {
                            $('#loader').removeClass('d-none');
                            callPCPPrint()
                        }else{
                            $('#loader').addClass('d-none');
                        }
                        window.scrollTo(0, document.body.scrollHeight);
                    }  else{
                        $('#data').append("<br>"+data.message)
                        $('#loader').addClass('d-none');
                    }

                }  
            });
        }
	</script>
@endpush