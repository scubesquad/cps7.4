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
					
					<div class="row gx-6 gx-xl-9">
						<div class="col-lg-8 col-xxl-8 ">
							<div class="card-header py-5 gap-2 gap-md-5">
								<form class="form" method="post" id="dashboard_form" action="">	
									<div class="row w-100">
										{{-- <div class="col-lg-3 col-md-3 col-12">
											<label class="fs-4">Branch</label>
											<select class="form-control">
												<option value="" name="branch_id">Select option</option>
												@foreach($branches as $branche)
													<option value="{{ $branche->branch_id }}">{{ $branche->branch_name }}</option>
												@endforeach
											</select>
										</div> --}}
										<div class="col-lg-3 col-md-3 col-12">
											<label class="fs-4">Start Date</label>
											<input type="text" class="form-control mb-4" id="start_date" value="{{ date('d-m-Y') }}" name="start_date" autocomplete="off">
										</div>
										<div class="col-lg-3 col-md-3 col-12">
											<label class="fs-4">End Date</label>
											<input type="text" class="form-control mb-4" id="end_date" value="{{ date('d-m-Y') }}" name="end_date" autocomplete="off">
										</div>
										<div class="col-lg-3 col-md-3 col-12">
											<div>&nbsp;</div>
											<button type="button" id="searchRequest" class="btn btn-primary mx-4">Search</button>
										</div>
									</div>
								</form>

							</div>
						</div>

					</div>
					@php
						$user = Auth::user();
					@endphp

					@if($user->roles[0]->name == 'Super Admin' || $user->roles[0]->name == 'Admin')
						<div class="row gx-6 gx-xl-9">
							<div class="col-lg-6 col-xxl-3 text-center">
								<!--begin::Clients-->
								<div class="card  h-100 bg-primary">
									<div class="card-body p-9">
										<!--begin::Heading-->
										<div class="fs-2hx fw-bold text-white count" id="sendToBranchCountAjax">{{ $sendToBranchCount }}</div>
										<div class="fs-2 fw-semibold mb-7 text-white">Total Request Submitted By Branch </div>
										<!--end::Heading-->
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-xxl-3 text-center">
								<!--begin::Clients-->
								<div class="card  h-100 bg-danger">
									<div class="card-body p-9">
										<!--begin::Heading-->
										<div class="fs-2hx fw-bold text-white count" id="rejectedUploadCountAjax">{{ $rejectedUploadCount }}</div>
										<div class="fs-2 fw-semibold mb-7 text-white">Request Rejected By HO </div>
										<!--end::Heading-->
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-xxl-3 text-center">
								<!--begin::Clients-->
								<div class="card  h-100 bg-success">
									<div class="card-body p-9">
										<!--begin::Heading-->
										<div class="fs-2hx fw-bold text-white count" id="minusAjax">{{ $sendToBranchCount - $rejectedUploadCount }}</div>
										<div class="fs-2 fw-semibold mb-7 text-white">Request Submitted By Branch </div>
										<!--end::Heading-->
									</div>
								</div>
							</div>


							<div class="col-lg-6 col-xxl-3 text-center">
								<!--begin::Clients-->
								<div class="card  h-100 bg-warning">
									<div class="card-body p-9">
										<!--begin::Heading-->
										<div class="fs-2hx fw-bold text-white count" id="receivedBankCountAjax">{{ $receivedBankCount }}</div>
										<div class="fs-2 fw-semibold mb-7 text-white">Total Printed Record Send To Branch Count  </div>
										<!--end::Heading-->
								
									</div>
								</div>
							</div>

							{{-- <div class="col-lg-6 col-xxl-4 text-center">
								<!--begin::Clients-->
								<div class="card  h-100 bg-danger">
									<div class="card-body p-9">
										<!--begin::Heading-->
										<div class="fs-2hx fw-bold text-white count" id="pickByCustCountAjax">{{ $pickByCustCount }}</div>
										<div class="fs-2 fw-semibold mb-7 text-white">How many books picked by customer </div>
										<!--end::Heading-->
								
									</div>
								</div>
							</div> --}}

						</div>
					@else
						<div class="row gx-6 gx-xl-9">
							<div class="col-lg-6 col-xxl-4 text-center">
								<!--begin::Clients-->
								<div class="card  h-100 bg-primary">
									<div class="card-body p-9">
										<!--begin::Heading-->
										<div class="fs-2hx fw-bold text-white count" id="sendToBranchCountAjax">{{ $sendToBranchCount }}</div>
										<div class="fs-2 fw-semibold mb-7 text-white">Request Submitted By Branch </div>
										<!--end::Heading-->
								
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-xxl-4 text-center">
								<!--begin::Clients-->
								<div class="card  h-100 bg-warning">
									<div class="card-body p-9">
										<!--begin::Heading-->
										<div class="fs-2hx fw-bold text-white count" id="receivedBankCountAjax">{{ $receivedBankCount }}</div>
										<div class="fs-2 fw-semibold mb-7 text-white">Printed Book Ready at HO</div>
										<!--end::Heading-->
								
									</div>
								</div>
							</div>


						</div>

					@endif

					<!--end::Row-->
				
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Content wrapper-->
@endsection

@push('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endpush

@push('scripts')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script type="text/javascript">
	$(document).ready(function () {

		$("#searchRequest").click(function (e) {
			start_date = $('#start_date').val();
			end_date = $('#end_date').val();
			$.ajax({
				url: "{{route('dashboard.ajax_search')}}",
				type: "POST",
				data: {start_date:start_date,end_date:end_date},
				success: function(response) {
					console.log(response);
					$('#sendToBranchCountAjax').html(response.sendToBranchCount);
					$('#receivedBankCountAjax').html(response.receivedBankCount);
					$('#rejectedUploadCountAjax').html(response.rejectedUploadCount);
					
					var minusCount = response.sendToBranchCount- response.rejectedUploadCount;
					console.log(minusCount);
					$('#minusAjax').html(minusCount);

					
					//$('#pickByCustCountAjax').html(response.pickByCustCount);
					counterAjax();
				}
			});

		});


		$("#start_date").datepicker({
			dateFormat: "dd-mm-yy",
			maxDate: 0,
			onSelect: function (date) {
				var date2 = $('#start_date').datepicker('getDate');
				date2.setDate(date2.getDate());
				var start_date = $('#start_date').val();
				var end_date = $('#end_date').val();
				if(start_date > end_date)
				{
					$('#end_date').datepicker('setDate', date2);
				}
				//sets minDate to start_date date + 1
				$('#end_date').datepicker('option', 'minDate', date2);
			}
		});
		$('#end_date').datepicker({
			dateFormat: "dd-mm-yy",
			onClose: function () {
				var start_date = $('#start_date').datepicker('getDate');
				var end_date = $('#end_date').datepicker('getDate');
				//check to prevent a user from entering a date below date of start_date
				if (end_date < start_date) {
					var minDate = $('#end_date').datepicker('option', 'minDate');
					$('#end_date').datepicker('setDate', minDate);
				}
			}
		});

		counterAjax();
		function counterAjax() {
			$('.count').each(function () {
				$(this).prop('Counter',0).animate({
					Counter: $(this).text()
				}, {
					duration: 3000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
				});
			});
		}


	});
</script>
@endpush