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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Database Backup</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Database Backup</a>
                                    </li>
                                    <!--end::Item-->
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
                                <div class="card-body align-items-center py-5 gap-2 gap-md-5">
                                    <button id="backup" class="btn btn-primary mx-4">Backup</button>
                                    <br>
                                    <div class="error"></div>
                                    <div class="success text-success"></div>
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
		$(document).ready(function(){
            // code to take a backup using ajax
			$('#backup').click(function(){
				$.ajax({
					url: "/app/backup",
                    type: "post",
                    success: function( response ) {
                        if(response.status == 200){
                        	swal.fire({
                                icon: 'success',
                                title: "success!",
                                text: response.message,
                                type: "success"
                            });
                            $('.success').html(response.message)
                        }
                    },
                    statusCode: {
	                    500: function() {
	                      $('.error').html("Something is wrong please check you internet connection.")
	                    }
                    },
                    beforeSend: function() {
                        $('#cps-loader').removeClass('d-none')
                    },
                    complete: function() {
                        $('#cps-loader').addClass('d-none');
                    }
				})
			})
		})
	</script>
@endpush