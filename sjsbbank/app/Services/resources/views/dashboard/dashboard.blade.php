@extends('layouts.master')

@section('body')
	<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
	
	<!--begin::Main-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Toolbar-->
			<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
				<!--begin::Toolbar container-->

				@include('message.message')
				<!--end::Toolbar container-->
			</div>
			<!--end::Toolbar-->
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::Row-->
					<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
					
						<!--begin::Col-->
						<div class="col-xxl-6">
							<!--begin::Engage widget 10-->
							<div class="card card-flush h-md-100">
								<!--begin::Body-->
								<div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0">
									<!--begin::Wrapper-->
									<div class="mb-10">
										<!--begin::Title-->
										{{-- Code to check if desktop image column is empty or not display according to that --}}
										<div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
											@if(isset($setting->desktop_image) && $setting->desktop_image)
											<img src="{{ (isset($setting->desktop_image)) ? asset('storage/'.$setting->desktop_image) : '' }}" style="width:100%">
											@else
												<span class="me-2">
												Welcome to {{ (isset($setting->homescreen_text)) ? $setting->homescreen_text : '' }}
												</span>
											@endif
										</div>
										
									</div>
									<!--begin::Wrapper-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Engage widget 10-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Content wrapper-->
@endsection