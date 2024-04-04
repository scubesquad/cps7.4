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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">User</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">User</a>
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
                                    @can('country.add')
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                        <!--begin::Add product-->
                                        <a class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#add_user_modal">Add User</a>
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
                                                <th>User Name</th>
                                                <th>Last Login</th>
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
<div class="modal fade" id="add_user_modal" tabindex="-1" aria-hidden="true">
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
                <form id="add_user_modal_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Add User</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Select Role</label>
                            <select class="form-select form-select-solid" name="role_name">
                                <option value="">Select Role</option>
                                @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">User Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter user name" name="username" />
                        <label for="username" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">User Id</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter user id" name="userid" />
                        <label for="userid" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Password</span>
                        </label>
                        <!--end::Label-->
                        <input type="password" class="form-control form-control-solid" placeholder="Enter password" name="password" id="password" />
                        <label for="password" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Confirm Password</span>
                        </label>
                        <!--end::Label-->
                        <input type="password" class="form-control form-control-solid" placeholder="Please confirm password" name="confirm_password" />
                        <label for="confirm_password" class="error"></label>
                    </div>

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">User Status</label>
                            <select class="form-select form-select-solid" name="user_status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="add_user_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="add_user_modal_submit" class="btn btn-primary">
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
<div class="modal fade" id="edit_user_modal" tabindex="-1" aria-hidden="true">
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
                <form id="edit_user_modal_form" class="form" action="#">
                    <input type="hidden" name="id" id="editAdminId">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Edit User</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Select Role</label>
                            <select class="form-select form-select-solid" id="editRoleName" name="role_name">
                                <option value="">Select Role</option>
                                @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">User Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter user name" name="username" id="editUsername" />
                        <label for="username" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">User Id</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter user id" name="userid" id="editUserId" readonly />
                        <label for="userid" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>New Password</span>
                        </label>
                        <!--end::Label-->
                        <input type="password" class="form-control form-control-solid" placeholder="Enter password" name="password" id="editPassword" />
                        <label for="password" class="error"></label>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>Confirm New Password</span>
                        </label>
                        <!--end::Label-->
                        <input type="password" class="form-control form-control-solid" placeholder="Please confirm password" name="confirm_password" />
                        <label for="confirm_password" class="error"></label>
                    </div>

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">User Status</label>
                            <select class="form-select form-select-solid" id="editUserStatus" name="user_status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="add_user_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="edit_user_modal_submit" class="btn btn-primary">
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
        getUser();
        function getUser(){
        	$('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                 // searching: true,
                "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                ajax: {
                    url: "{{ url('/user/list') }}",
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
                        data: 'username',
                        name: 'username',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'lastlogintime',
                        name: 'lastlogintime',
                        render: function(data, type, row){
                            return `<span class="fw-bold">${data}</span>`;
                        },
                    },
                    {
                        data: 'user_status',
                        name: 'user_status',
                        render: function(data, type, row){
                            if(data == 1){
                                return `<div class="badge badge-light-success">Active</div>`;
                            }else{
                                return `<div class="badge badge-light-danger">Inactive</div>`;
                            }
                        },
                    },{
                        data: 'adminid',
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
                $('#edit_user_modal').modal('show');
                $.ajax({
                    url: "/user/edit/"+id,
                    type: "get",
                    success: function( response ) {
                        $('#editAdminId').val(response.data.adminid)
                        $('#editUsername').val(response.data.username)
                        $('#editUserId').val(response.data.userid)
                        $('#editUserStatus').val(response.data.user_status).change();
                        $('#editRoleName').val(response.role).change();
                    }
                });
            });

            $('body').on('click', '.delete', function(){
                swal.fire({
                    title: 'Are you sure?',
                    text: "The record will be permanently deleted from database.",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let id = $(this).data('id');
                        $.ajax({
                            url: "/user/delete",
                            type: "post",
                            data: {id:id},
                            success: function( response ) {
                                if(response.status == 200){
                                    $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getUser();
                                }else{
                                    swal.fire({
                                        icon: 'error',
                                        title: "Error",
                                        text: response.message,
                                        type: "error"
                                    });
                                }
                            }
                        });
                    }
                });  
            });


            $('#add_user_modal_submit').click(function(){
                var frm_user = $('#add_user_modal_form');
                $("#add_user_modal_form").validate({
                    rules: {
                        role_name: {
                            required: true,
                        },
                        username: {
                            required: true,
                        },
                        userid: {
                            required: true,
                        },
                        password: {
                            required: true,
                            minlength: 8,
                        },
                        confirm_password: {
                            required: true,
                            minlength: 8,
                            equalTo: "#password"
                        },
                    },
                    messages: {
                        role_name: {
                            required: "Please Select Role",
                        },
                        username: {
                            required: "Please Enter Username",
                        },
                        userid: {
                            required: "Please Enter userid",
                        },
                        password: {
                            required: "Please Enter Password",
                        },
                        confirm_password: {
                            required: "Please confirm the pasword",
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
                            url: "{{url('user/store')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                console.log(response);
                                if(response.status == 200){
                                    swal.fire({
                                        title: "success!",
                                        text: response.message,
                                        type: "success"
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getUser();
                                        $('#add_user_modal').modal('toggle');
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

                            }
                        });
                    }
                });
            });



            $('#edit_user_modal_submit').click(function(){
                var frm_user = $('#edit_user_modal_form');
                $("#edit_user_modal_form").validate({
                    rules: {
                        role_name: {
                            required: true,
                        },
                        username: {
                            required: true,
                        },
                        userid: {
                            required: true,
                        },
                        password: {
                            minlength: 8,
                        },
                        confirm_password: {
                            minlength: 8,
                            equalTo: "#editPassword"
                        },
                    },
                    messages: {
                        role_name: {
                            required: "Please Select Role",
                        },
                        username: {
                            required: "Please Enter Username",
                        },
                        userid: {
                            required: "Please Enter userid",
                        },
                        password: {
                            required: "Please Enter Password",
                        },
                        confirm_password: {
                            required: "Please confirm the pasword",
                        },
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: "{{url('user/update')}}",
                            type: "POST",
                            data: frm_user.serialize(),
                            success: function( response ) {
                                console.log(response);
                                if(response.status == 200){
                                    swal.fire({
                                        title: "success!",
                                        text: response.message,
                                        type: "success"
                                    }).then(function() {
                                        $('#kt_ecommerce_products_table').DataTable().destroy();
                                        getUser();
                                        $('#edit_user_modal').modal('toggle');
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

                            }
                        });
                    }
                });
            });


            $('body').on('hidden.bs.modal', '#add_user_modal, #edit_user_modal', function () {
                $('[name="username"]').text('');
                $('[name="userid"]').text('');
                $('[name="password"]').text('');
                $('[name="confirm_password"]').text('');
                $('[name="role_name"]').val('').change();
                $('[name="user_status"]').val('1').change();
                $('body').find("label[for='username']").text('');
                $('body').find("label[for='userid']").text('');
                $('body').find("label[for='password']").text('');
                $('body').find("label[for='confirm_password']").text('');
                $('body').find("label[for='role_name']").text('');
            });
        })
	</script>
@endpush