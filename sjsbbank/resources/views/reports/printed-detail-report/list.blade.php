@extends('layouts.master')

@section('body')
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Report</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Printed Detail Report</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    {{-- <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li> --}}
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    {{-- <li class="breadcrumb-item text-muted">List</li> --}}
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
                                    
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    
                                    <div id="displayUploadingFilter" class="mb-5">
                                        <form id="post_search_form" method="POST">
                                            <div class="row">
                                                <div class="col-lg-3 col-12">
                                                    <label>Select Start Date</label>
                                                    <input type="date" class="form-control" name="search_start_date">
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <label>Select End Date</label>
                                                    <input type="date" class="form-control" name="search_end_date">
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <div>&nbsp;</div>
                                                    <button class="btn btn-primary" id="filterTransaction"><i class="fa fa-send-o"></i>Search</button>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <div>&nbsp;</div>
                                                    <button class="btn btn-info" id="exportPdf"><i class="fa fa-file-pdf-o"></i> Export PDF</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--begin::Table-->
                                    <!--<div class="table-responsive">-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                            <!--begin::Table head-->
                                            <thead class="bg-light">
                                                <tr class="text-start fw-bold fs-7 gs-0">
                                                    <th>Action</th>
                                                    <th>Unique Request No</th>
                                                    <th>Micr Code</th>
                                                    <th>Account No</th>
                                                    <th>Customer Name</th>
                                                    <th>No Of Books</th>
                                                    <th>Book Size</th>
                                                    <th>Tr Code</th>
                                                    <th>Chk No. From</th>
                                                    <th>Chk No. To</th>
                                                    <th>Chk Charges</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-semibold text-gray-700">
                                                
                                            </tbody>
                                            <!--end::Table body-->

                                            
                                            
                                        </table>
                                    <!--</div>-->
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


<!-- Edit upload data Modal -->
<div class="modal fade" id="show_status_upload_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-700px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="closeModal" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="show_status_upload_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Request Status</h1>
                    </div>
                    <!--end::Heading--> 
                    <!--begin::Input group-->
                    <!--<input type="hidden" name="upload_id" id="uploadId">-->
                    <style>
                        .status_div .table thead tr th {
                            border: 1px solid #ccc;
                            border-bottom-color:#ccc !important;
                        }
                        .status_div .table tbody tr td {
                            border: 1px solid #ccc;
                            border-bottom: 1px solid #ccc !important;
                        }
                    </style>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="status_div" style="margin-bottom: 15px;">
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    

                    <!--begin::Actions-->
                    {{-- <div class="text-center">
                        <button type="reset" id="show_status_upload_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                    </div> --}}
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!-- End of edit upload data Modal -->



@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        #kt_ecommerce_products_table_wrapper {
            padding: 0px 30px;
        }
    </style>

@endpush

@push('scripts')

	<script>
        var isCheck = 'complete';
        $(document).ready(function(){
            var table;
            table = $('#kt_ecommerce_products_table').DataTable({
                // "bPaginate": true,
                // "bLengthChange": true,
                // "bFilter": true,
                // "bInfo": false,
                // "bAutoWidth": false,
                // "autoWidth": false,
                processing: true,
                serverSide: true,
                "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ route('getPrintReportRecordAjax') }}",
                    type: "POST",
                    data: function (d) {
                        d.start_date = $('input[name=search_start_date]').val();
                        d.end_date = $('input[name=search_end_date]').val();
                    }
                },
                columns: [
                    // {data: 'id', name: 'id'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    {data: 'cps_unique_req', name: 'cps_unique_req'},
                    {data: 'cps_micr_code', name: 'cps_micr_code'},
                    {data: 'cps_account_no', name: 'cps_account_no'},
                    {data: 'cps_act_name', name: 'cps_act_name'},
                    {data: 'cps_no_of_books', name: 'cps_no_of_books'},
                    {data: 'cps_book_size', name: 'cps_book_size'},
                    {data: 'cps_tr_code', name: 'cps_tr_code'},
                    {data: 'cps_chq_no_from', name: 'cps_chq_no_from'},
                    {data: 'cps_chq_no_to', name: 'cps_chq_no_to'},
                    {data: 'cheque_charges', name: 'cheque_charges'},
                ],
                order: [
                    [0, 'desc']
                ],
                lengthMenu: [
                    [10, 25, 50, 100, 500, -1],
                    [10, 25, 50, 100, 500, "All"]
                ],
                pageLength: 50,
            });

            $('#post_search_form').on('submit', function (e) {
                table.draw();
                e.preventDefault();
            });

            function getPrintTransactionList() {
                table.ajax.reload(null, false);
            }

            
        });

        function showStatus(id) {
            $('#show_status_upload_modal').modal('show');
            $.ajax({
                url: "/report/printed-detail-report/"+id,
                type: "get",
                success: function(response) {
                    $('.status_div').html(response.html)

                },
                beforeSend: function() {
                    $('#cps-loader').removeClass('d-none')
                },
                complete: function() {
                    $('#cps-loader').addClass('d-none');
                }
            });

        }

        $("#closeModal").click(function(){
            $('#show_status_upload_modal').modal('hide');
            $('#cps-loader').addClass('d-none');
        });

        $("#closeModal").click(function(){
            $('#show_status_upload_modal').modal('hide');
            $('#cps-loader').addClass('d-none');
        });



        $('#exportPdf').click(function(){
            let frm =  $('#post_search_form').serialize();

            // window.location.href = "/report/printed-report/pdf?"+frm   
            let a= document.createElement('a');
            a.target= '_blank';
            a.href= "/report/printed-detail-report/generatePdf?"+frm 
            a.click();    
        })

        // $("#exportPdf").click(function (e) {

        //     var frm_user = $('#post_search_form');

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         url: "{{url('report/printed-detail-report/generatePdf')}}",
        //         type: "POST",
        //         data: frm_user.serialize(),
        //         success: function( response ) {
        //             console.log(response);
        //             if(response.status == 200){
        //                 swal.fire({
        //                     icon: 'success',
        //                     title: "success!",
        //                     text: response.message
        //                 }).then(function() {
        //                     //$('#kt_ecommerce_products_table').DataTable().destroy();
        //                     //getState();
        //                     //$('#add_state_modal').modal('toggle');
        //                 });
        //             }else{
        //                 if (response.errors) {
        //                     var errorString = '';
        //                     $.each(response.errors, function (key, value) {
        //                         $('[name="' + key + '"]').next().text(value); 
        //                         $('[name="' + key + '"]').next().show();
        //                     });
        //                 }
        //             }
        //         },
        //         // beforeSend: function() {
        //         //     $('#cps-loader').removeClass('d-none')
        //         // },
        //         // complete: function() {
        //         //     $('#cps-loader').addClass('d-none');
        //         // }
        //     });



        // });

	</script>
@endpush