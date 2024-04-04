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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Transaction</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Transaction</a>
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
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    @can('transaction.upload')
                                    <form action="" method="post" class="w-50" id="upload_request_file_form">
                                        <fieldset class="border p-2">
                                            <legend  class="float-none w-auto p-2">Choose a file to upload</legend>
                                            <div class="d-flex">
                                                <div>
                                                    <input type="file" class="form-control mb-4" id="uploadFile" name="upload">
                                                    <label class="errorUpload text-danger"></label>
                                                </div>
                                                <div>
                                                    <button id="uploadRequestFile" class="btn btn-light mx-4">Upload</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    @endcan

                                    <div>
                                        @if(isset($toner) && $toner->is_toner == 1)
                                        @if($toner->toner_leaves_capacity <= 100)
                                        <label style="color:red;float: right;font-size: 14px;background-color: yellow;">Toner can print <b>{{ $toner->toner_leaves_capacity }}<b> leaves. Please replace your toner.</label>
                                        @else
                                        <label style="float: right;font-size: 14px; color:blue;">Toner can print <b>{{ $toner->toner_leaves_capacity }}<b> leaves.</label>
                                        @endif
                                        @endif
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 table-responsive mt-5">
                                    <!--begin::Table-->
                                    @can('transaction.filter')
                                    <div id="displayUploadingFilter" class="mb-3">
                                        <div class="row">
                                            <div class="col-lg-3 col-12">
                                                <label>Select Branch</label>
                                                <select class="form-select mb-2" id="selectBranch">
                                                    <option></option>
                                                    <option value="default" selected>Default template</option>
                                                    <option value="electronics">Electronics</option>
                                                    <option value="office">Office stationary</option>
                                                    <option value="fashion">Fashion</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <label>Transaction Type</label>
                                                <select class="form-select mb-2" id="selectTransactionType">
                                                    <option></option>
                                                    <option value="default" selected>Default template</option>
                                                    <option value="electronics">Electronics</option>
                                                    <option value="office">Office stationary</option>
                                                    <option value="fashion">Fashion</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <label>Book Size</label>
                                                <select class="form-select mb-2" id="selectBookSize">
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <div>&nbsp;</div>
                                                <button class="btn btn-primary" id="filterTransaction">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                    @endcan
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
                                                    @can('transaction.print')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 printInBunch">Print Selected in bunch</button>&nbsp;&nbsp;&nbsp;
                                                    @endcan
                                                    @can('transaction.delete')
                                                    <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 deleteSelected">Delete Selected</button>
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
            getUploadTransactionRequest();
            function getUploadTransactionRequest(branch="", transaction="", bookSize=''){
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
                        url: "{{ url('/transaction/upload') }}",
                        method: "post",
                        data: {branch:branch, transaction:transaction, bookSize:bookSize},
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


            // Ajax to upload request file
            $('#uploadRequestFile').click(function(e){
                e.preventDefault()
                var files = $('#uploadFile')[0].files;
                if(files.length > 0){
                    var fd = new FormData();
                    fd.append('upload',files[0]);
                    fd.append('_token','{{ csrf_token() }}');
                    $.ajax({
                        url: "{{url('transaction/upload/store')}}",
                        type: "POST",
                        data: fd,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function( response ) {
                            console.log(response);
                            if(response.status == 200){
                                swal.fire({
                                    icon: 'success',
                                    title: "success!",
                                    text: response.message
                                }).then(function() {
                                    getFilterDetails()
                                    $('#kt_ecommerce_products_table').DataTable().destroy();
                                    getUploadTransactionRequest();
                                    $('#uploadFile').val('');
                                    $('.errorUpload').html('')
                                });
                            }else{
                                if(response.status == 203){
                                    $('.errorUpload').html(response.message)
                                }
                            }

                        },
                        statusCode: {
                            500: function() {
                              $('.errorUpload').html("Please check request file. Some records data is not in requested format.")
                            }
                        }
                    });
                }else{
                    $('.errorUpload').html("Please select file")
                }
                
            });

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
                            url: "/transaction/upload/delete",
                            type: "post",
                            data: {id:val},
                            success: function( response ) {
                                getFilterDetails()
                                $('#kt_ecommerce_products_table').DataTable().destroy();
                                getUploadTransactionRequest();
                                $('#uploadFile').val('');
                            }
                        });
                    }
                }); 
            });

            $('.printInBunch').click(function(){
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
                                
                                $.ajax({
                                    url: "/transaction/upload/shift-data-to-pending",
                                    type: "post",
                                    data: {id:val},
                                    success: function( response ) {
                                        window.location.href = "/pending-print-req/list"
                                        $('#uploadFile').val('');
                                    }
                                });
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

            getFilterDetails()
            function getFilterDetails(){
                $.ajax({
                    url: "/transaction/get-filter-details",
                    type: "get",
                    success: function( response ) {
                        console.log(response)
                        if(response.status == 200){
                            $('#displayUploadingFilter').addClass('d-none')
                            let bookSize = "";
                            bookSize += "<option value=''>Select Book Size</option>";
                            $.each(response.data.bookSize, function(key,val) { 
                                bookSize += `<option value="${val.cps_book_size}">${val.cps_book_size}</option>`;
                                $('#displayUploadingFilter').removeClass('d-none')
                            });
                            $('#selectBookSize').html(bookSize)

                            let branch = "";
                            branch += "<option value=''>Select Book Branch</option>";
                            $.each(response.data.branch, function(key,val) { 
                                branch += `<option value="${val.branch_code}">${val.branch_name}</option>`;
                            });
                            $('#selectBranch').html(branch)

                            let transactionCode = "";
                            transactionCode += "<option value=''>Select Transaction Type</option>";
                            $.each(response.data.transactionCode, function(key,val) { 
                                transactionCode += `<option value="${val.cps_tr_code}">${val.cps_tr_code}</option>`;
                            });
                            $('#selectTransactionType').html(transactionCode)
                        }
                    }
                });
            }

            $('#filterTransaction').click(function(){
                let bookSize = $('#selectBookSize').val();
                let branch = $('#selectBranch').val();
                let transactionCode = $('#selectTransactionType').val();
                $('#kt_ecommerce_products_table').DataTable().destroy();
                getUploadTransactionRequest(branch, transactionCode, bookSize)
            })

        })
    </script>
@endpush