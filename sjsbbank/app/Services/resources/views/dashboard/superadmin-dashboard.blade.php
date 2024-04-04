@extends('layouts.master')

	@section('body')
		<style type="text/css">
			table, th, td {
		  		border: 1px solid;
			}

			table {
		  		width: 100%;
		  		border-collapse: collapse;
			}
		</style>
		<!--begin::Wrapper-->
		<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
	
			<!--begin::Main-->
			<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
				<!--begin::Content wrapper-->
				<div class="d-flex flex-column flex-column-fluid">
					<!--begin::Toolbar-->
					<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
						<!--begin::Toolbar container-->
						<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
							
						</div>
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
												<div class="text-gray-800 mb-13">
													<div class="row text-center">
														<div class="col-lg-4 col-md-6 col-12">
															{{-- code to display total instance and active and inactive instance --}}
															<table class="table align-middle table-row-dashed fs-6 gy-5">
																<tbody>
																	<tr>
																		<td>
																			<div class="card card-flush h-lg-100">  
																			    <!--begin::Header-->
																			    <div class="card-header pt-5">
																			        <!--begin::Title-->
																			        <h3 class="card-title align-items-start flex-column">            
																			            <span class="card-label fw-bold text-dark">Highlights</span>
																			            <span class="text-gray-400 mt-1 fw-semibold fs-6">Latest social statistics</span>
																			        </h3>
																			        <!--end::Title-->

																			    </div>
																			    <!--end::Header-->

																			    <!--begin::Body-->
																			    <div class="card-body pt-5">                 
																			        <!--begin::Item-->
																			        <div class="d-flex flex-stack">
																			            <!--begin::Section-->
																			            <div class="text-gray-700 fw-semibold fs-6 me-2">Total Instance</div>                   
																			            <!--end::Section-->  

																			            <!--begin::Statistics--> 
																			            <div class="d-flex align-items-senter">
																			                <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>  
																			                                        
																			                <!--begin::Number-->           
																			                <span class="text-gray-900 fw-bolder fs-6">{{ $totalActive + $totalInactive }}</span> 
																			                <!--end::Number-->  
																			                    
																			            </div>  
																			        <!--end::Statistics-->           
																			        </div>
																			        <!--end::Item-->

																			        <!--begin::Separator-->
																			        <div class="separator separator-dashed my-3"></div>
																			        <!--end::Separator-->
																			             
																			        <!--begin::Item-->
																			        <div class="d-flex flex-stack">
																			            <!--begin::Section-->
																			            <div class="text-gray-700 fw-semibold fs-6 me-2">Active</div>                   
																			            <!--end::Section-->  

																			            <!--begin::Statistics--> 
																			            <div class="d-flex align-items-senter">
																			                <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2"><span class="path1"></span><span class="path2"></span></i>                 
																			                                        
																			                <!--begin::Number-->           
																			                <span class="text-gray-900 fw-bolder fs-6">{{ $totalActive }}</span> 
																			                    <!--end::Number-->    
																			            </div>  
																			            <!--end::Statistics-->           
																			        </div>
																			        <!--end::Item-->

																			        <!--begin::Separator-->
																			        <div class="separator separator-dashed my-3"></div>
																			        <!--end::Separator-->
																			             
																			        <!--begin::Item-->
																			        <div class="d-flex flex-stack">
																			            <!--begin::Section-->
																			            <div class="text-gray-700 fw-semibold fs-6 me-2">Inactive</div>                   
																			            <!--end::Section-->  

																			            <!--begin::Statistics--> 
																			            <div class="d-flex align-items-senter">
																			                <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2"><span class="path1"></span><span class="path2"></span></i>  
																			                                        
																			                <!--begin::Number-->           
																			                <span class="text-gray-900 fw-bolder fs-6">{{ $totalInactive }}</span> 
																			                <!--end::Number-->  
																			            </div>  
																			            <!--end::Statistics-->           
																			        </div>
																			        <!--end::Item-->     
																			    </div>
																			    <!--end::Body-->
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<br>
													{{-- to display expired banks whose expired within 45 days --}}
													<div class="row mt-5">
														<div class="col-12">
															<p style="font-size:16px; font-weight: 600;">The list will have data whose AMC Expire in <= 45 days</p>
															<table class="table table-row-dashed fs-6 gy-5"  id="kt_ecommerce_products_table">
																<thead>
																	<tr>
																		<th><b>Bank Name</b></th>
																		<th><b>Branch</b></th>
																		<th><b>Sales Person</b></th>
																		<th><b>Status</b></th>
																		<th><b>AMC Due Date</b></th>
																	</tr>
																</thead>
																<tbody>
																	@foreach($banks as $bank)
																	<tr>
																		<td align="left">{{ $bank->name }}</td>
																		<td align="left">{{ $bank->city }}</td>
																		<td align="left">{{ $bank->sales_person }}</td>
																		<td align="left">
																			@if($bank->status == "1")
																			<div class="badge badge-light-success">Active</div>
																			@else
																			<div class="badge badge-light-danger">Inactive</div>
																			@endif
																		</td>
																		<td align="left">{{ date('d-m-y', strtotime('+365 days', strtotime($bank->licence_start_date))) }}</td>
																	</tr>
																	@endforeach
																</tbody>
															</table>
														</div>
													</div>
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

@push('scripts')
	<script type="text/javascript">
			$('#kt_ecommerce_products_table').DataTable({
				"bPaginate": false,
		        "bLengthChange": false,
		        "bFilter": true,
		        "bSort": false,
		        "bInfo": false,
		        "bAutoWidth": false,
		        "autoWidth": false
			});
	</script>
@endpush