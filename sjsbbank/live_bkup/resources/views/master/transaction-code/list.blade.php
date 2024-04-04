@extends('layouts.master')

@section('body')
	 <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                @include('message.message')
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Transaction Code</h1>
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
                                    <li class="breadcrumb-item text-muted">Transaction Code</li>
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
                                    @can('transaction-code.add')
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Add product-->
                                        <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#add_transaction_code_modal">Add Transaction Code</a>
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
                                                <th>Name</th>
                                                <th>Code</th>
                                                <th>Alpha Code</th>
                                                <th>Status</th>
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
<div class="modal fade" id="add_transaction_code_modal" tabindex="-1" aria-hidden="true">
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
                <form id="add_transaction_code_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Add Transaction Code</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Transaction Code Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" id="addName" placeholder="Enter transaction code name" name="transactioncodedescription" />
                        <label for="transactioncodedescription" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Transaction Code</span>
                        </label>
                        <!--end::Label-->
                        <input type="number" class="form-control form-control-solid txtOnlyNumber" id="addCode" placeholder="Enter transaction code" name="transactioncode" maxlength="2" />
                        <label for="transactioncode" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Alpha Code</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" id="addAlphaCode" placeholder="Enter alpha code code" name="alphacode" maxlength="2" />
                        <label for="alphacode" class="error"></label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Assign</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" id="addStatus" name="transactionstatus">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="add_transaction_code_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="add_transaction_code_modal_submit" class="btn btn-primary">
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
<div class="modal fade" id="transaction_code_modal" tabindex="-1" aria-hidden="true">
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
                <form id="transaction_code_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Transaction Code</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Transaction Code Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" name="transactioncode_id" id="editId">
                        <input type="text" class="form-control form-control-solid" placeholder="Enter transaction code name" name="transactioncodedescription" id="editName" />
                        <label for="transactioncodedescription" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Transaction Code</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter transaction code" name="transactioncode" maxlength="3" id="editCode" />
                        <label for="transactioncode" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Alpha Code</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" id="editAlphaCode" placeholder="Enter alpha code code" name="alphacode" maxlength="2" />
                        <label for="alphacode" class="error"></label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Assign</label>
                            <select class="form-select form-select-solid" name="transactionstatus" id="editStatus">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="transaction_code_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="transaction_code_modal_submit" class="btn btn-primary">
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
        getTransactionCode();
        function getTransactionCode(){
        	$('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ url('/master/transaction-code/list') }}",
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
                        data: 'transactioncodedescription',
                        name: 'transactioncodedescription',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'transactioncode',
                        name: 'transactioncode',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'alphacode',
                        name: 'alphacode',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'transactionstatus',
                        name: 'transactionstatus',
                        render: function(data, type, row){
                            if(data == 1){
                                return `<div class="badge badge-light-success">Active</div>`;
                            }else{
                                return `<div class="badge badge-light-danger">Inactive</div>`;
                            }
                        },
                    }
                    ,{
                        data: 'transactioncode_id',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row){
                            let html = "";

                            @can('transaction-code.edit')
                                html += `<button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-id="${data}">
                                    <i class="fa fa-edit" style="font-weight:normal !important;"></i>
                                </button>`;
                            @endcan

                            @can('transaction-code.delete')
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
                $('#transaction_code_modal').modal('show');
                $.ajax({
                    url: "/master/transaction-code/edit/"+id,
                    type: "get",
                    success: function( response ) {
                        $('#editName').val(response.data.transactioncodedescription)
                        $('#editCode').val(response.data.transactioncode)
                        $('#editId').val(response.data.transactioncode_id)
                        $('#editAlphaCode').val(response.data.alphacode)
                        $('#editStatus').val(response.data.transactionstatus).change();
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
                            url: "/master/transaction-code/delete",
                            type: "post",
                            data: {id:id},
                            success: function( response ) {
                                $('#kt_ecommerce_products_table').DataTable().destroy();
                                getTransactionCode();
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


            $('#add_transaction_code_modal_submit').click(function(){
                var frm_user = $('#add_transaction_code_modal_form');
                $("#add_transaction_code_modal_form").validate({
                    rules: {
                        transactioncodedescription: {
                            required: true,
                        },
                        alphacode: {
                            required: true,
                        },
                        transactioncode: {
                            required: true,
                            digits: true,
                            maxlength: 3
                        },
                    },
                    messages: {
                        transactioncodedescription: {
                            required: "Please Enter Transaction Code Name",
                        },
                        alphacode: {
                            required: "Please Enter Alpha Code",
                        },
                        transactioncode: {
                            required: "Please Enter Transaction Code Code.",
                            digits: "Please Enter Number Only",
                            maxlength: 'Maximum 3 Character Allowed'
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
                            url: "{{url('master/transaction-code/store')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                console.log(response);
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getTransactionCode();
                                        $('#add_transaction_code_modal').modal('toggle');
                                    });
                                }else{
                                    // if(response.errors.name != ""){
                                    //     alert(response.errors.name);
                                    // }

                                    if (response.errors) {
                                        var errorString = '';
                                        $.each(response.errors, function (key, value) {
                                            $('[name="' + key + '"]').next().text(value);
                                            $('[name="' + key + '"]').next().show();
                                        });
                                        // $('#showErrorDiv').html(errorString);
                                    }
                                    // swal.fire({
                                    //     title: "Error",
                                    //     text: "Please Check the record",
                                    //     type: "error"
                                    // });
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



            $('#transaction_code_modal_submit').click(function(){
                var frm_user = $('#transaction_code_modal_form');
                $("#transaction_code_modal_form").validate({
                    rules: {
                        transactioncodedescription: {
                            required: true,
                        },
                        alphacode: {
                            required: true,
                        },
                        transactioncode: {
                            required: true,
                            digits: true,
                            maxlength: 3
                        },
                    },
                    messages: {
                        transactioncodedescription: {
                            required: "Please Enter Transaction Code Name",
                        },
                        alphacode: {
                            required: "Please Enter Alpha Code",
                        },
                        transactioncode: {
                            required: "Please Enter Transaction Code Code.",
                            digits: "Please Enter Number Only",
                            maxlength: 'Maximum 3 Character Allowed'
                        },
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "{{url('master/transaction-code/update')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                console.log(response);
                                if(response.status == 200){
                                    swal.fire({
                                        icon: 'success',
                                        title: "success!",
                                        text: response.message
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getTransactionCode();
                                        $('#transaction_code_modal').modal('toggle');
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


            $('body').on('hidden.bs.modal', '#add_transaction_code_modal, #transaction_code_modal', function () {
                $('[name="transactioncodedescription"]').val('');
                $('[name="transactioncode"]').val('');
                $('[name="alphacode"]').val('');
                $('[name="transactionstatus"]').val('1').change();
                $('[for="addName"]').text('');
                $('[for="addCode"]').text('');
                $('[for="addAlphaCode"]').text('');
            });
        })
	</script>
@endpush