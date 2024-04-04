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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Country</h1>
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
                                    <li class="breadcrumb-item text-muted">Country</li>
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
                                    @can('country.add')
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Add product-->
                                        <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#add_country_modal">Add Country</a>
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
<div class="modal fade" id="add_country_modal" tabindex="-1" aria-hidden="true">
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
                <form id="add_country_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Add Country</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Country Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid txtOnlyCharacter" placeholder="Enter country name" maxlength="50" name="country_name" />
                        <label for="name" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Country Code</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter country code" name="country_code" maxlength="3" />
                        <label for="code" class="error"></label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Assign</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="country_isdelete">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="add_country_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="add_country_modal_submit" class="btn btn-primary">
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
<div class="modal fade" id="edit_country_modal" tabindex="-1" aria-hidden="true">
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
                <form id="edit_country_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit Country</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Country Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="hidden" name="country_id" id="editId">
                        <input type="text" class="form-control form-control-solid txtOnlyCharacter" placeholder="Enter country name" maxlength="50" name="country_name" id="editName" />
                        <label for="name" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Country Code</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter country code" name="country_code" maxlength="3" id="editCode" />
                        <label for="code" class="error"></label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Assign</label>
                            <select class="form-select form-select-solid" name="country_isdelete" id="editStatus">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="edit_country_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="edit_country_modal_submit" class="btn btn-primary">
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
        getCountry();
        function getCountry(){
        	$('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                 // searching: true,
                "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ url('/master/country/list') }}",
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
                        data: 'country_name',
                        name: 'country_name',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'country_code',
                        name: 'country_code',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'country_isdelete',
                        name: 'country_isdelete',
                        render: function(data, type, row){
                            if(data == 1){
                                return `<div class="badge badge-light-success">Active</div>`;
                            }else{
                                return `<div class="badge badge-light-danger">Inactive</div>`;
                            }
                        },
                    },{
                        data: 'country_id',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row){
                            let html = "";

                            @can('country.edit')
                                html += `<button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-id="${data}">
                                    <i class="fa fa-edit" style="font-weight:normal !important;"></i>
                                </button>`;
                            @endcan

                            @can('country.delete')
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
                $('#edit_country_modal').modal('show');
                $.ajax({
                    url: "/master/country/edit/"+id,
                    type: "get",
                    success: function( response ) {
                        console.log(response)
                        $('#editName').val(response.data.country_name)
                        $('#editCode').val(response.data.country_code)
                        $('#editId').val(response.data.country_id)
                        $('#editStatus').val(response.data.country_isdelete).change();
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
                    icon: 'warning',
                    title: 'Are you sure?',
                    text: "The record will be permanently deleted from database.",
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let id = $(this).data('id');
                        $.ajax({
                            url: "/master/country/delete",
                            type: "post",
                            data: {id:id},
                            success: function( response ) {
                                if(response.status == 200){
                                    $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getCountry();
                                }else{
                                    swal.fire({
                                        icon: 'error',
                                        title: "Error",
                                        text: response.message
                                    });
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


            $('#add_country_modal_submit').click(function(){
                var frm_user = $('#add_country_modal_form');
                $("#add_country_modal_form").validate({
                    rules: {
                        country_name: {
                            required: true,
                        },
                        country_code: {
                            required: true,
                            maxlength: 3
                        },
                    },
                    messages: {
                        country_name: {
                            required: "Please Enter Country Name",
                        },
                        country_code: {
                            required: "Please Enter Country Code.",
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
                            url: "{{url('master/country/store')}}",
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
                                        getCountry();
                                        $('#add_country_modal').modal('toggle');
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



            $('#edit_country_modal_submit').click(function(){
                var frm_user = $('#edit_country_modal_form');
                $("#edit_country_modal_form").validate({
                    rules: {
                        country_name: {
                            required: true,
                        },
                        country_code: {
                            required: true,
                            maxlength: 3
                        },
                    },
                    messages: {
                        country_name: {
                            required: "Please Enter Country Name",
                        },
                        country_code: {
                            required: "Please Enter Country Code.",
                            maxlength: 'Maximum 3 Character Allowed'
                        },
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "{{url('master/country/update')}}",
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
                                        getCountry();
                                        $('#edit_country_modal').modal('toggle');
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


            $('body').on('hidden.bs.modal', '#add_country_modal, #edit_country_modal', function () {
                $('[name="country_name"]').val('');
                $('[name="country_code"]').val('');
                $('[name="country_isdelete"]').val('1').change();
                $('body').find("label[for='country_name']").text('');
                $('body').find("label[for='country_code']").text('');
            });
        })
	</script>
@endpush