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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Printed Cheque List</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Printed Cheque List</a>
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
                                    
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!-- modal -->
                                    <nav>
                                        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Printed/Ready for Dispatch Branch</button>
                                            @can('print.ready-for-pickup-page')
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">In Transit/Received at Branch</button>
                                            @endcan
                                            @can('print.pickup-page')
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Ready to Pickup/Pickup By Customer</button>
                                            @endcan
                                        </div>
                                    </nav>
                                    <div class="tab-content p-3 border" id="nav-tabContent">
                                        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                                        <th>Cheque Charges</th>
                                                        <th>Status</th>
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
                                                            @can('print.send-to-branch')
                                                            <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 sendToBranch">Sent to Branch</button>&nbsp;&nbsp;&nbsp;                                                            
                                                            @endcan
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table1">
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
                                                        <th>Cheque Charges</th>
                                                        <th>Status</th>
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
                                                            
                                                            @can('print.ready-for-pickup')
                                                            <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 readyForPickup">Ready For Pickup</button>&nbsp;&nbsp;&nbsp;
                                                            @endcan
                                                            
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table2">
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
                                                        <th>Cheque Charges</th>
                                                        <th>Status</th>
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
                                                            @can('print.pickup')
                                                            <button href="javascript::void(0)" class="btn btn-sm py-1 px-1 pickupUp">Picked Up By Customer</button>&nbsp;&nbsp;&nbsp;
                                                            @endcan
                                                            
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                                
                                            </table>
                                        </div>
                                    </div>
                                    <!-- modal -->
                                    <!--begin::Table-->
                                    <!--<div class="table-responsive">-->
                                        
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
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "autoWidth": false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('getPrintRecordAjax') }}",
                    type: "POST",
                },
                columns: [
                    {data: 'id', name: 'id'},
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
                    {data: 'cheque_charges', name: 'cheque_charges'},
                    {data: 'cps_status', name: 'cps_status'},
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

            // Send To Branch Record
            var table1;
            table1 = $('#kt_ecommerce_products_table1').DataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "autoWidth": false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('getPrintSendToBranchRecordAjax') }}",
                    type: "POST",
                },
                columns: [
                    {data: 'id', name: 'id'},
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
                    {data: 'cheque_charges', name: 'cheque_charges'},
                    {data: 'cps_status', name: 'cps_status'},
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

            function tableReload1() {
                table1.ajax.reload(null, false);
            }

            // ready To Pickup

            var table2;
            table2 = $('#kt_ecommerce_products_table2').DataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
                "autoWidth": false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('getPrintReadyForPickupRecordAjax') }}",
                    type: "POST",
                },
                columns: [
                    {data: 'id', name: 'id'},
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
                    {data: 'cheque_charges', name: 'cheque_charges'},
                    {data: 'cps_status', name: 'cps_status'},
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

            function tableReload2() {
                table2.ajax.reload(null, false);
            }

            // //////////////////////
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

                                        swal.fire({
                                            icon: 'success',
                                            title: "success!",
                                            text: response.message
                                        }).then(function() {
                                            getPrintTransactionList();
                                            tableReload1();
                                        });

                                        
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
                        text: "Please select atleast one checkbox"
                    });
                }
            });

            $('.readyForPickup').click(function(){
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
                                    url: "/transaction/list/ready-for-pickup",
                                    type: "post",
                                    data: {id:val},
                                    success: function( response ) {

                                        swal.fire({
                                            icon: 'success',
                                            title: "success!",
                                            text: response.message
                                        }).then(function() {
                                            tableReload1();
                                            tableReload2();
                                        });

                                        
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
                        text: "Please select atleast one checkbox"
                    });
                }
            });


            $('.pickupUp').click(function(){
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
                                    url: "/transaction/list/pickup-up",
                                    type: "post",
                                    data: {id:val},
                                    success: function( response ) {

                                        swal.fire({
                                            icon: 'success',
                                            title: "success!",
                                            text: response.message
                                        }).then(function() {
                                            tableReload2();
                                        });

                                        
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
                        text: "Please select atleast one checkbox"
                    });
                }
            });

            


        });


	</script>
@endpush