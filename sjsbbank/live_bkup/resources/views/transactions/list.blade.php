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
                                    @can('role.add')
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Add product-->
                                        <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#add_country_modal">Add Role</a>
                                        <!--end::Add product-->
                                    </div>
                                    <!--end::Card toolbar-->
                                    @endcan
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <!--<div class="table-responsive">-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                            <!--begin::Table head-->
                                            <thead class="bg-light">
                                                <tr class="text-start fw-bold fs-7 gs-0">
                                                    <th></th>
                                                    {{-- <th>Action</th> --}}
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
                                                        
                                                        <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 sendToBranch">Sent to Branch</button>&nbsp;&nbsp;&nbsp;
                                                        
                                                        
    
                                                    </th>
                                                </tr>
                                            </tfoot>
                                            
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







@endsection

@push('scripts')
	<script>
        var isCheck = 'complete';
        $(document).ready(function(){
            var table;
            table = $('#kt_ecommerce_products_table').DataTable({
                // processing: true,
                // serverSide: true,

                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "autoWidth": false,
                processing: true,
                serverSide: true,

                // "language": {
                //     "processing": "<div id='loader-wrapper'><div id='loader'></div></div>"
                // },
                ajax: "{{ route('getPrintRecordAjax') }}",
                //type: 'POST',
                columns: [
                    {data: 'id', name: 'id'},
                    //{data: 'action', name: 'action', orderable: false, searchable: false},
                    {data: 'cps_unique_req', name: 'cps_unique_req'},
                    {data: 'cps_micr_code', name: 'cps_micr_code'},
                    {data: 'cps_account_no', name: 'cps_account_no'},
                    {data: 'cps_act_name', name: 'cps_act_name'},
                    {data: 'cps_no_of_books', name: 'cps_no_of_books'},
                    {data: 'cps_book_size', name: 'cps_book_size'},
                    {data: 'cps_tr_code', name: 'cps_tr_code'},
                    {data: 'cps_atpar', name: 'cps_atpar'},
                    {data: 'cps_chq_no_from', name: 'cps_chq_no_from'},
                    {data: 'cps_chq_no_to', name: 'cps_chq_no_to'},
                    {data: 'cps_act_address1', name: 'cps_act_address1'},
                    {data: 'cps_act_address2', name: 'cps_act_address2'},
                    {data: 'cps_act_address3', name: 'cps_act_address3'},
                    {data: 'cps_act_address4', name: 'cps_act_address4'},
                    {data: 'cps_act_address5', name: 'cps_act_address5'},
                    {data: 'cps_act_city', name: 'cps_act_city'},
                    {data: 'cps_act_pin', name: 'cps_act_pin'},
                    {data: 'cps_act_mobile', name: 'cps_act_mobile'},
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

            function getPrintTransactionList() {
                table.ajax.reload(null, false);
            }

            $('.selectAll').click(function(){
                $('body').find('.selectId').prop('checked', true);
            });

            $('.deSelectAll').click(function(){
                $('body').find('.selectId').prop('checked', false);
            });


            $('.sendToBranch').click(function(){
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
                                    url: "/transaction/list/send-to-branch",
                                    type: "post",
                                    data: {id:val},
                                    success: function( response ) {
                                        getPrintTransactionList();
                                        $('#uploadFile').val('');
                                    },
                                    beforeSend: function() {
                                        $('#cps-loader').removeClass('d-none')
                                    },
                                    complete: function() {
                                        $('#cps-loader').addClass('d-none');
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




        });


	</script>
@endpush