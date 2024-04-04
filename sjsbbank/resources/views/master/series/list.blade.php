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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Cheque Series</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Master</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Cheque Series</li>
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
                                    @can('cheque-series.add')
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Add product-->
                                        <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#add_cheque_series_modal">Add Cheque Series</a>
                                        <!--end::Add product-->
                                    </div>
                                    <!--end::Card toolbar-->
                                    @endcan
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                        <!--begin::Table head-->
                                        <thead class="bg-light">
                                            <tr class="text-start fw-bold fs-7 gs-0">
                                                <th>Sr No.</th>
                                                <th>Branch</th>
                                                <th>Transaction Code</th>
                                                <th>Series From</th>
                                                <th>Series To</th>
                                                <th>Last Number</th>
                                                <th>Actions</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-700">
                                            
                                        </tbody>
                                        <!--end::Table body-->
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
		

<!-- Add country Modal -->
<div class="modal fade" id="add_cheque_series_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                <form id="add_cheque_series_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Add Cheque Series</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <input type="hidden" name="branch_sub_code" id="branchsubcode" value="">
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Bank</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="series_bank_id">
                                <option value="">Select Bank</option>
                                @foreach($banks as $bank)
                                <option value="{{ $bank->bank_id }}">{{ $bank->bank_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Branch</label>
                            <select class="form-select form-select-solid selectBranch" data-control="select2" data-hide-search="true" name="branch_id">
                                <option value="">Select Branch</option>
                                @foreach($branchs as $branch)
                                <option value="{{ $branch->branch_id }}" data-subcode="{{ $branch->branch_sub_code }}">{{ $branch->branch_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Transaction Code</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="transactioncode">
                                <option value="">Select Code</option>
                                @foreach($transactonCodes as $transactonCode)
                                <option value="{{ $transactonCode->transactioncode }}">{{ $transactonCode->transactioncodedescription }}({{ $transactonCode->transactioncode }})</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Cheque Series From</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid countMaxLength txtOnlyNumber" placeholder="Enter cheque series from" name="series_from" maxlength="6" />
                        <label for="series_from" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Cheque Series To</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid countMaxLength txtOnlyNumber" placeholder="Enter cheque series to" name="series_to" maxlength="6" />
                        <label for="series_to" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Cheque Series Starts From</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid countMaxLength txtOnlyNumber" placeholder="Enter cheque series starts from" name="series_lastno" maxlength="6" />
                        <label for="series_lastno" class="error"></label>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="add_cheque_series_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="add_cheque_series_modal_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
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
<!-- End of add country Modal -->


<!-- Edit country Modal -->
<div class="modal fade" id="edit_cheque_series_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                <form id="edit_cheque_series_modal_form" class="form" action="#">
                    <input type="hidden" name="id" id="editId">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Cheque Series</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <input type="hidden" name="branch_sub_code" id="editbranchsubcode" value="">
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Bank</label>
                            <select class="form-select form-select-solid" name="series_bank_id" id="editSeriesBankId">
                                <option value="">Select Bank</option>
                                @foreach($banks as $bank)
                                <option value="{{ $bank->bank_id }}">{{ $bank->bank_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Branch</label>
                            <select class="form-select form-select-solid editSelectBranch" name="branch_id" id="editBranchId">
                                <option value="">Select Branch</option>
                                @foreach($branchs as $branch)
                                <option value="{{ $branch->branch_id }}" data-subcode="{{ $branch->branch_sub_code }}">{{ $branch->branch_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Transaction Code</label>
                            <select class="form-select form-select-solid" name="transactioncode" id="editTransactionCode">
                                <option value="">Select Code</option>
                                @foreach($transactonCodes as $transactonCode)
                                <option value="{{ $transactonCode->transactioncode }}">{{ $transactonCode->transactioncodedescription }}({{ $transactonCode->transactioncode }})</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Cheque Series From</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid countMaxLength" placeholder="Enter cheque series from txtOnlyNumber" name="series_from" id="editSeriesForm" maxlength="6" />
                        <label for="series_from" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Cheque Series To</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid countMaxLength txtOnlyNumber" placeholder="Enter cheque series to" name="series_to" id="editSeriesTo" maxlength="6" />
                        <label for="series_to" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Cheque Series Starts From</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid countMaxLength txtOnlyNumber" placeholder="Enter cheque series starts from" name="series_lastno" id="editSeriesLastno" maxlength="6" />
                        <label for="series_lastno" class="error"></label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="edit_cheque_series_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="edit_cheque_series_modal_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
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
<!-- End of edit country Modal -->

@endsection

@push('scripts')
	<script>
        getChequeSeries();
        function getChequeSeries(){
        	$('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ url('/master/series/list') }}",
                    method: "post",
                },
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'branch_name',
                        name: 'tb_branchdetails.branch_name',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'series_transationcode',
                        name: 'tb_cps_chequeseries.series_transationcode',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'series_from',
                        name: 'tb_cps_chequeseries.series_from',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'series_to',
                        name: 'tb_cps_chequeseries.series_to',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'series_lastno',
                        name: 'tb_cps_chequeseries.series_lastno',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    { 
                        data: 'series_id',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row){
                            let html = "";

                            @can('cheque-series.edit')
                                html += `<button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-id="${data}">
                                    <i class="fa fa-edit" style="font-weight:normal !important;"></i>
                                </button>`;
                            @endcan

                            @can('cheque-series.delete')
                                html += `<a data-id="${data}" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="delete menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>`;
                            @endcan

                            return html;
                        },
                    }
                ]
            });
        }

        $(document).ready(function(){

            // edit button click event
            $('body').on('click', '.btn-active-light-primary', function(){
                let id = $(this).data('id');
                $('#edit_cheque_series_modal').modal('show');
                $.ajax({
                    url: "{{ url('/master/series/edit') }}" + '/' +id,
                    type: "get",
                    success: function( response ) {
                        console.log(response)
                        $('#editId').val(response.data.series_id)
                        $('#editSeriesLastno').val(pad(response.data.series_lastno));
                        $('#editSeriesTo').val(pad(response.data.series_to));
                        $('#editSeriesForm').val(pad(response.data.series_from));
                        $('#editbranchsubcode').val(response.data.branch_sub_code);
                        
                        $('#editSeriesBankId').val(response.data.serise_Bank).change();
                        $('#editBranchId').val(response.data.series_branchcode).change();
                        $('#editTransactionCode').val(response.data.series_transationcode).change();
                    },
                    beforeSend: function() {
                        $('#cps-loader').removeClass('d-none')
                    },
                    complete: function() {
                        $('#cps-loader').addClass('d-none');
                    }
                });
            });


            $('body').on('click', '.delete', function(){
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
                        let id = $(this).data('id');
                        $.ajax({
                            url: "{{ url('/master/series/delete') }}",
                            type: "post",
                            data: {id:id},
                            success: function( response ) {
                                $('#kt_ecommerce_products_table').DataTable().destroy();
                                getChequeSeries();
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
            });


            $('#add_cheque_series_modal_submit').click(function(){
                var frm_user = $('#add_cheque_series_modal_form');
                $("#add_cheque_series_modal_form").validate({
                    rules: {
                        series_bank_id: {
                            required: true,
                        },
                        branch_id: {
                            required: true,
                        },
                        transactioncode: {
                            required: true,
                        },
                        series_from: {
                            required: true,
                            minlength: 6
                        },
                        series_to: {
                            required: true,
                            minlength: 6
                        },
                        series_lastno: {
                            required: true,
                            minlength: 6
                        },
                    },
                    messages: {
                        series_bank_id: {
                            required: "Please Select Bank",
                        },
                        branch_id: {
                            required: "Please Select Branch",
                        },
                        transactioncode: {
                            required: "Please Select Transaction Code",
                        },
                        series_from: {
                            required: "Please Enter Cheque Series From.",
                            maxlength: 'Maximum 6 Character Allowed'
                        },
                        series_to: {
                            required: "Please Enter Cheque Series To.",
                            maxlength: 'Maximum 6 Character Allowed'
                        },
                        series_lastno: {
                            required: "Please Enter Cheque Series Last No.",
                            maxlength: 'Maximum 6 Character Allowed'
                        },
                    },
                    submitHandler: function(form) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $('#submit').html('Please Wait...');
                        $("#submit"). attr("disabled", true);
                        $.ajax({
                            url: "{{url('master/series/store')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getChequeSeries();
                                        $('#add_cheque_series_modal').modal('toggle');
                                    });
                                }else if(response.status == 203){
                                    $('[name="series_lastno"]').next().text(response.message);
                                    $('[name="series_lastno"]').next().show();
                                }
                                else if(response.status == 201){
                                    swal.fire({
                                        icon: 'error',
                                        title: "Error!",
                                        text: response.message
                                    }).then(function() {
                                        $('#add_cheque_series_modal').modal('toggle');
                                    });
                                }else{
                                    if (response.errors) {
                                        var errorString = '';
                                        $.each(response.errors, function (key, value) {
                                            $('[name="' + key + '"]').next().text(value);
                                            $('[name="' + key + '"]').next().show();
                                        });
                                    }
                                }

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
            });



            $('#edit_cheque_series_modal_submit').click(function(){
                var frm_user = $('#edit_cheque_series_modal_form');
                $("#edit_cheque_series_modal_form").validate({
                    rules: {
                        series_bank_id: {
                            required: true,
                        },
                        branch_id: {
                            required: true,
                        },
                        transactioncode: {
                            required: true,
                        },
                        series_from: {
                            required: true,
                            minlength: 6
                        },
                        series_to: {
                            required: true,
                            minlength: 6
                        },
                        series_lastno: {
                            required: true,
                            minlength: 6
                        },
                    },
                    messages: {
                        series_bank_id: {
                            required: "Please Select Bank",
                        },
                        branch_id: {
                            required: "Please Select Branch",
                        },
                        transactioncode: {
                            required: "Please Select Transaction Code",
                        },
                        series_from: {
                            required: "Please Enter Cheque Series From.",
                            maxlength: 'Maximum 6 Character Allowed'
                        },
                        series_to: {
                            required: "Please Enter Cheque Series To.",
                            maxlength: 'Maximum 6 Character Allowed'
                        },
                        series_lastno: {
                            required: "Please Enter Cheque Series Last No.",
                            maxlength: 'Maximum 6 Character Allowed'
                        },
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "{{url('master/series/update')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getChequeSeries();
                                        $('#edit_cheque_series_modal').modal('toggle');
                                    });
                                }else if(response.status == 203){
                                    $('[name="series_lastno"]').next().text(response.message);
                                    $('[name="series_lastno"]').next().show();
                                }
                                else if(response.status == 201){
                                    swal.fire({
                                        icon: 'error',
                                        title: "Error!",
                                        text: response.message
                                    }).then(function() {
                                        $('#edit_cheque_series_modal').modal('toggle');
                                    });
                                }else{
                                    if (response.errors) {
                                        var errorString = '';
                                        $.each(response.errors, function (key, value) {
                                            $('[name="' + key + '"]').next().text(value);
                                            $('[name="' + key + '"]').next().show();
                                        });
                                    }
                                }

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
            });


            $('body').on('hidden.bs.modal', '#add_cheque_series_modal, #edit_cheque_series_modal', function () {
                $('[name="series_from"]').val('');
                $('[name="series_to"]').val('');
                $('[name="series_lastno"]').val('');
                $('[name="series_bank_id"]').val('').change();
                $('[name="branch_id"]').val('').change();
                $('[name="transactioncode"]').val('').change();
                $('[for="series_bank_id"]').text('');
                $('[for="branch_id"]').text('');
                $('[for="transactioncode"]').text('');
                $('[for="series_from"]').text('');
                $('[for="series_to"]').text('');
                $('[for="series_lastno"]').text('');
            });

            function pad (str) {
              str = str.toString();
              return str.length < 6 ? pad("0" + str, 6) : str;
            }

            $('.selectBranch').change(function(){
                let branchsubcode = $(this).find(':selected').data('subcode')
                $('#branchsubcode').val(branchsubcode)
            });

            $('.editSelectBranch').change(function(){
                let branchsubcode = $(this).find(':selected').data('subcode')
                $('#editbranchsubcode').val(branchsubcode)
            });

        })
	</script>
@endpush