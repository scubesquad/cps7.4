@extends('layouts.master')

@section('body')
<style type="text/css">
    .form-check-input{
        width: 18px;
        height: 18px;
        background-size: 70% 70%;
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
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Log</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="javascript::void(0)" class="text-muted text-hover-primary">Log</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Details</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
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
                                
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0 pt-4">
                                    <table class="table border align-middle table-row-dashed fs-6 gy-5">
                                    	<thead>
                                    		<tr style="background: #b0ddf0;">
					                            <td width="25%" style="text-align:center">User Name</td>
					                            <td width="25%" style="text-align:center">Module/Page</td>
					                            <td width="25%" style="text-align:center">Action Performed</td>
					                            <td width="25%" style="text-align:center">Date Time</td>
					                        </tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
					                            <td style="text-align:center"><?php echo $log->username; ?></td>
					                            <td style="text-align:center"><?php echo $log->name; ?></td>
					                            <td style="text-align:center"><?php echo $log->action_performed; ?></td>
					                            <td style="text-align:center"><?php echo date('d-m-Y h:i:s A', strtotime($log->created)); ?></td>
					                        </tr>
                                    	</tbody>
                                    </table>

                                    @if($log->message)
                                    <table class="table border align-middle table-row-dashed fs-6 gy-5">
                                    	<thead>
                                    		<tr>
					                            <td width="25%" style="text-align:center;background: #b0ddf0;">Message</td>
					                            <td style="text-align:center">{{ $log->message }}</td>
					                        </tr>
                                    	</thead>
                                    </table>
                                    @endif


                                    @if($log->action_performed == "delete")
                                    <table class="table border align-middle table-row-dashed fs-6 gy-5" style="width:50%">
                                    	<thead>
                                    		<tr style="background: #f7cecc;">
					                            <td>Deleted Data</td>
					                        </tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                    			<td>
                                    				@php
                                    					
														$jsonData = json_decode($log->previous_details);
														if(!is_array($jsonData)){
															$jsonPreviousDetails = str_replace(",", ",<br>", $log->previous_details);
															$jsonPreviousDetails = str_replace(":", " : ", $jsonPreviousDetails);
															$jsonPreviousDetails = substr($jsonPreviousDetails, 1, -1);
															print_r($jsonPreviousDetails);
														}else{
															$count = 0;
															$jsonData = json_decode($log->previous_details);

															foreach($jsonData as $jsonDatas){
																echo "{<br>";
																foreach($jsonDatas as $key  => $data){
																	if($data != "")
																		echo $key." : ".$data."<br>";
																	// print_r($key);
																	$count = $count + 1;
																}
																echo "}<br>";
															}

															if($count == 0)
															{
																echo "NA";	
															}
														}
                                    				@endphp
                                    			</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    @endif


                                    @if($log->action_performed == "insert" || $log->name == "Change Password" || $log->action_performed == "System Logout" || $log->action_performed == "logout" || $log->action_performed == "backup" || $log->action_performed == "login" || $log->action_performed == "reprint" || $log->action_performed == "print" || $log->action_performed == "reprint-request")
                                    <br>
                                    <table class="table border align-middle table-row-dashed fs-6 gy-5" style="width:50%">
                                    	<thead>
                                    		<tr style="background: #cbe5fe;">
					                            <td>Inserted Data</td>
					                        </tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                    			<td>
                                    				@php
                                    					
														$jsonData = json_decode($log->details);
														if(!is_array($jsonData)){
															$jsonPreviousDetails = str_replace(",", ",<br>", $log->details);
															$jsonPreviousDetails = str_replace(":", " : ", $jsonPreviousDetails);
															$jsonPreviousDetails = substr($jsonPreviousDetails, 1, -1);
															print_r($jsonPreviousDetails);
														}else{
															$count = 0;
															$jsonData = json_decode($log->details);

															foreach($jsonData as $jsonDatas){
																echo "{<br>";
																foreach($jsonDatas as $key  => $data){
																	if($data != "")
																		echo $key." : ".$data."<br>";
																	// print_r($key);
																	$count = $count + 1;
																}
																echo "}<br>";
															}

															if($count == 0)
															{
																echo "NA";	
															}
														}
                                    				@endphp
                                    			</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    @endif


                                    @if($log->action_performed == "update")
                                    <br>
                                    <table class="table border align-middle table-row-dashed fs-6 gy-5">
                                    	<thead>
                                    		<tr>
					                            <td width="50%" style="background: #ffcb99;">Before Update</td>
					                            <td width="50%" style="background: #cdeb8b;">After Update</td>
					                        </tr>
                                    	</thead>
                                    	<tbody>
                                    		<tr>
                                    			<td>
                                    				@php
                                    					
															$jsonData = json_decode($log->previous_details);
															if(!is_array($jsonData)){
																$jsonPreviousDetails = str_replace(",", ",<br>", $log->previous_details);
																$jsonPreviousDetails = str_replace(":", " : ", $jsonPreviousDetails);
																$jsonPreviousDetails = substr($jsonPreviousDetails, 1, -1);
																print_r($jsonPreviousDetails);
															}else{
																$count = 0;
																$jsonData = json_decode($log->previous_details);

																foreach($jsonData as $jsonDatas){
																	echo "{<br>";
																	foreach($jsonDatas as $key  => $data){
																		if($data != "")
																			echo $key." : ".$data."<br>";
																		// print_r($key);
																		$count = $count + 1;
																	}
																	echo "}<br>";
																}

																if($count == 0)
																{
																	echo "NA";	
																}
															}
                                    				@endphp
                                    			</td>
                                    			<td>
                                    				@php
                                    					
															$jsonData = json_decode($log->details);
															if(!is_array($jsonData)){
																$jsonPreviousDetails = str_replace(",", ",<br>", $log->details);
																$jsonPreviousDetails = str_replace(":", " : ", $jsonPreviousDetails);
																$jsonPreviousDetails = substr($jsonPreviousDetails, 1, -1);
																print_r($jsonPreviousDetails);
															}else{
																$count = 0;
																$jsonData = json_decode($log->details);

																foreach($jsonData as $jsonDatas){
																	echo "{<br>";
																	foreach($jsonDatas as $key  => $data){
																		if($data != "")
																			echo $key." : ".$data."<br>";
																		// print_r($key);
																		$count = $count + 1;
																	}
																	echo "}<br>";
																}

																if($count == 0)
																{
																	echo "NA";	
																}
															}
                                    				@endphp
                                    			</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    @endif

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
