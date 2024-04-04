{{-- code to show the alert message when licence will expire before 15 days --}}
@if(date('d-m-Y', strtotime('+365 days', strtotime(Auth::user()->create_date))) < date('d-m-Y', strtotime('+16 days')))
<div id="" class="app-container container-fluid d-flex flex-stack">
	{{-- Code to find the days --}}
	@php
		$datetime1 = new DateTime(date('d-m-Y', strtotime('+365 days', strtotime(Auth::user()->create_date))));
		$datetime2 = new DateTime(date('d-m-Y'));
		$interval = $datetime1->diff($datetime2);
		$days = $interval->format('%a');
	@endphp
	<!--begin::Alert-->
	<div class="alert alert-dismissible bg-warning d-flex flex-column flex-sm-row p-5">
	    <!--begin::Icon-->
	    <i class="ki-duotone ki-notification-bing fs-2hx text-primary me-4 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
	    <!--end::Icon-->

	    
	    <!--begin::Wrapper-->
	    <div class="d-flex flex-column pe-0 pe-sm-10">
	        <!--begin::Title-->
	        <h4 class="fw-semibold">Your licence will expire in <strong>{{ $days }} days!</strong></h4>
	        <!--end::Title-->

	        <!--begin::Content-->
	        <span>Please Contact the administrator</span>
	        <!--end::Content-->
	    </div>
	    <!--end::Wrapper-->

	    <!--begin::Close-->
	    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" style="font-size:19px" data-bs-dismiss="alert">
	        &times;
	    </button>
	    <!--end::Close-->
	</div>
	<!--end::Alert-->
</div>
@endif