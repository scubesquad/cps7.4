@extends('layouts.master')

@section('body')
<style type="text/css">
    .form-control, .form-select{
        padding: 0.35rem 1rem;
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Profile</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Profile</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Change Password</li>
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
                        	<div class="row d-flex justify-content-center">
                        		<div class="col-lg-6 col-12">
                        			<!--begin::Products-->
		                            <div class="card card-flush pt-5">
		                                
		                                <!--begin::Card body-->
		                                <div class="card-body pt-0">
		                                    <form action="{{ url('changepassword') }}" method="post" id="changepassword">
		                                        @csrf
                                                <div class="errors text-danger" id="errorMessage"></div>
		                                        <table class="table align-middle">
		                                            <tbody>
		                                                <tr>
		                                                    <th style="width:30%">Name</th>
		                                                    <td><input type="text" readonly class="form-control" value="{{ Auth::user()->username }}" autocomplete="off" /></td>
		                                                </tr>

		                                                <tr>
		                                                    <th style="width:30%">Current Password<span class="text-danger">*</span></th>
		                                                    <td><input type="password" class="form-control" name="current_password" autocomplete="off" /></td>
		                                                </tr>

		                                                <tr>
		                                                    <th style="width:30%">New Password<span class="text-danger">*</span></th>
		                                                    <td><input type="password" class="form-control" name="new_password" autocomplete="off" /></td>
		                                                </tr>

		                                                <tr>
		                                                    <th style="width:30%">Confirm New Password<span class="text-danger">*</span></th>
		                                                    <td><input type="password" class="form-control" name="new_password_confirmation" autocomplete="off" /></td>
		                                                </tr>

		                                                <tr>
		                                                    <td colspan="2">
		                                                        &nbsp;&nbsp;&nbsp;&nbsp;
		                                                        <a href="{{URL::previous()}}" class="btn btn-secondary btn-sm">Back</a>
		                                                        <button class="btn btn-primary btn-sm">Save</button>
		                                                    </td>
		                                                </tr>
		                                            </tbody>
		                                        </table>
		                                    </form>
		                                </div>
		                                <!--end::Card body-->
		                            </div>
		                            <!--end::Products-->	
                        		</div>
                        	</div>
		                            
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
		
@push('scripts')
    <script>
        $(document).ready(function(){
           

            // code to validationn and save bank 
            var frm_user = $('#changepassword');
            $("#changepassword").validate({
                rules: {
                    current_password: {
                        required: true,
                    },
                    new_password: {
                        required: true,
                    },
                },
                messages: {
                    current_password: {
                        required: "Please enter current password",
                    },
                    new_password: {
                        required: "Please enter new password",
                    },
                },
                submitHandler: function(form) {
                    $.ajax({
                        url: "{{url('changepassword')}}",
                        type: "POST",
                        data: frm_user.serialize(),
                        success: function( response ) {
                            if(response.status == 200){
                                swal.fire({
                                    title: "success!",
                                    text: response.message,
                                    type: "success"
                                }).then(function() {
                                   window.location.reload()
                                });
                            }else if(response.status == 500){
                                $('#errorMessage').html(response.message)
                            }
                            else{
                                if (response.errors) {
                                    var errorString = '';
                                    $('#errorMessage').html('The new_password field confirmation does not match.')
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
            // end of save bank 


        })
    </script>
@endpush

@endsection
