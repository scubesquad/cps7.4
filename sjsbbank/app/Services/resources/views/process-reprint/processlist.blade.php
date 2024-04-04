@extends('layouts.master')

@section('body')
    <style type="text/css">
        table.dataTable td, table.dataTable th{
            text-wrap: nowrap;
        }
    </style>
     <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        @include('message.message')
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Process Reprint Request</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Process Reprint Request</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">List</li>
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
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed" id="kt_ecommerce_products_table">
                                        <!--begin::Table head-->
                                        <thead class="bg-light">
                                            <tr class="text-start fw-bold fs-7 gs-0">
                                                <th></th>
                                                <th>Unique Request No</th>
                                                <th>Micr Code</th>
                                                <th>Account No</th>
                                                <th>Customer Name</th>
                                                <th>No Of Books</th>
                                                <th>Book Size</th>
                                                <th>Tr Code</th>
                                                <th>At Par</th>
                                                <th>Chk No. From</th>
                                                <th>Chk No. To</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>Address 3</th>
                                                <th>Address 4</th>
                                                <th>Address 5</th>
                                                <th>City</th>
                                                <th>PIN</th>
                                                <th>Mobile</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-700">
                                            
                                        </tbody>
                                        <!--end::Table body-->
                                        <tfoot class="bg-light">
                                            <tr>
                                                <th colspan="19">
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 selectAll">Select all</button>&nbsp;&nbsp;&nbsp;
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 deSelectAll">Deselect all</button>&nbsp;&nbsp;&nbsp;
                                                    @can('process-reprint.print-in-bunch')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 printSelected" data-value="printselectedInBunch">Print selected in bunch</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan
                                                    @can('process-reprint.print-selected-pages')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 printSelectedPage" data-value="printselected">Print selected pages</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan
                                                    @can('process-reprint.delete')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 deleteSelected">Delete Selected</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan
                                                    <input type="checkbox" name="requisitionCheckbox" id="requisitionCheckbox"><label for="requisitionCheckbox">Print Requisition Slip</label>&nbsp;&nbsp;&nbsp;
                                                    @can('process-reprint.print-requisiion-only')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 printRequisitionSlipOnly">Print Requisition Only</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <!--end::Table-->
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
    <script type="text/javascript">
        const socket = new WebSocket('ws://localhost:5000');
        var count = 0;
        var isCheck = 'pending';
        socket.addEventListener('open', function (event) {
            console.log('Connected to the WS server!');
            isCheck = 'complete';
        });

        socket.addEventListener('close', function (event) {
            console.log('disconnected to the WS server!')
        });

        /*socket.addEventListener('message', function(event){
            console.log('2nd event?', event.data)
        });*/

        socket.addEventListener('message', function (event) {
        });

        $(document).ready(function(){

            // Funtion to list data
            getReprintQueRequest();
            function getReprintQueRequest(){
                $('#kt_ecommerce_products_table').DataTable({
                    "bPaginate": false,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bInfo": false,
                    "bAutoWidth": false,
                    "autoWidth": false,
                    processing: true,
                    serverSide: true,
                    // "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                    ajax: {
                        url: "{{ url('process/reprint') }}",
                        method: "post",
                    },
                    columns: [
                        {
                            data: 'id',
                            name: 'id',
                            orderable: false,
                            searchable: false,
                            render: function(data, type, row){
                                return `<input type="checkbox" class="selectId" name="id" value="${data}">`;
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_unique_req',
                            name: 'cps_unique_req',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_micr_code',
                            name: 'cps_micr_code',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_account_no',
                            name: 'cps_account_no',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_name',
                            name: 'cps_act_name',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_no_of_books',
                            name: 'cps_no_of_books',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_book_size',
                            name: 'cps_book_size',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_tr_code',
                            name: 'cps_tr_code',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_atpar',
                            name: 'cps_atpar',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_chq_no_from',
                            name: 'cps_chq_no_from',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_chq_no_to',
                            name: 'cps_chq_no_to',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address1',
                            name: 'cps_act_address1',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address2',
                            name: 'cps_act_address2',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address3',
                            name: 'cps_act_address3',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address4',
                            name: 'cps_act_address4',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_address5',
                            name: 'cps_act_address5',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_city',
                            name: 'cps_act_city',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_pin',
                            name: 'cps_act_pin',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        },
                        {
                            data: 'cps_act_mobile',
                            name: 'cps_act_mobile',
                            render: function(data, type, row){
                                return `<span class="fw-bold">${(data) ? data : '-'}</span>`;
                            },
                        }
                    ]
                });
            }


            

            $('.selectAll').click(function(){
                $('body').find('.selectId').prop('checked', true);
            });

            $('.deSelectAll').click(function(){
                $('body').find('.selectId').prop('checked', false);
            });

            $('.deleteSelected').click(function(){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var val = [];
                        $(':checkbox:checked').each(function(i){
                          val[i] = $(this).val();
                        });
                        console.log(val)
                        $.ajax({
                            url: "/process/reprint/delete",
                            type: "post",
                            data: {id:val},
                            success: function( response ) {
                                $('#kt_ecommerce_products_table').DataTable().destroy();
                                getReprintQueRequest();
                            }
                        });
                    }
                }); 
            });

            $('.printSelected').click(function(){
                var val = [];
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });

                

                if(val.length > 0)
                {
                    if(isCheck == "complete"){
                        swal.fire({
                            title: 'Are you sure?',
                            text: "You want to continue",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                let url = "/process/reprint/update?printinbunch=bunch";
                                let reprintUrl = "";
                                if($("#requisitionCheckbox").prop('checked') == true){
                                    reprintUrl = "/reprint-cheque?printinbunch=bunch&requisition=1"
                                }else{
                                    reprintUrl = "/reprint-cheque?printinbunch=bunch"
                                }

                                executeAjax(val, url, reprintUrl);
                            }
                        });
                    }else{
                        alert('PCP is not connected. Please start/restart PCP.')
                    }
                }else{
                    swal.fire({
                        icon: 'warning',
                        title: "Warning!",
                        text: "Please select atleast checkbox"
                    });
                }
            });

            $('.printSelectedPage').click(function(){
                var val = [];
                var selective_pages_no = [];
                var page_nos = "";
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });

                

                if(val.length > 0)
                {
                    page_nos = prompt("Please enter page number comma separated (e.g. 1,3,4)");
                    if (page_nos != null) {
                        
                        splitString = page_nos.split(',');
                        for(i=0; i<splitString.length; i++){
                            var selective_value = $.trim(splitString[i]);       
                            selective_pages_no.push(selective_value);
                        }
                    }
                    // return false;
                    if(isCheck == "complete"){
                        if(page_nos != null && page_nos != "")
                        {
                            swal.fire({
                                title: 'Are you sure?',
                                text: "You want to continue",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    let executeUrl = "/process/reprint/update";
                                    let redirecturl = "";
                                    if($("#requisitionCheckbox").prop('checked') == true){
                                        redirecturl = '/reprint-cheque?selective_pages_no='+selective_pages_no+'&requisition=1'
                                    }else{
                                        redirecturl = '/reprint-cheque?selective_pages_no='+selective_pages_no
                                    }
                                    executeAjax(val, executeUrl, redirecturl)
                                    // executeAjax(executeUrl);
                                }
                            });
                        }
                    }else{
                        alert('PCP is not connected. Please start/restart PCP.')
                    }
                }else{
                    swal.fire({
                        icon: 'warning',
                        title: "Warning!",
                        text: "Please select atleast checkbox"
                    });
                }
            });

            $('.printRequisitionSlipOnly').click(function(){
                var val = [];
                $(':checkbox:checked').each(function(i){
                    val[i] = $(this).val();
                });

                if(val.length > 0)
                {
                    if(isCheck == "complete"){
                        swal.fire({
                            title: 'Are you sure?',
                            text: "You want to continue",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                let url = "/process/reprint/update";
                                let executeUrl = "/reprint-cheque?requisitiononly=1";

                                executeAjax(val, url, executeUrl);
                            }
                        });
                    }else{
                        alert('PCP is not connected. Please start/restart PCP.')
                    }
                }else{
                    swal.fire({
                        icon: 'warning',
                        title: "Warning!",
                        text: "Please select atleast checkbox"
                    });
                }
            });

            function executeAjax(val, url, reprintUrl){
                $.ajax({
                    url: url,
                    type: "get",
                    data: {id:val},
                    success: function( response ) {
                        window.location.href = reprintUrl
                    }
                });
            }

        })
    </script>
@endpush