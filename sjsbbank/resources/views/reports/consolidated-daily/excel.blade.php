<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consolidated Reports</title>
</head>
<body>
	
	<table border="1" align="center">
		<thead>
			<tr>
				<th colspan="9"><b>Sucessfully Printed Reports for period {{ date('d-m-Y', strtotime(Request()->start_date)) }} to {{ date('d-m-Y', strtotime(Request()->end_date)) }}</b></th>
	        </tr>
	        <tr>
				<th><b>Sr.No.</b></th>
	            <th><b>Acc. Type</b></th>
	            <th><b>Account. No.</b></th>
	            <th><b>Chq From</b></th>
	            <th><b>Chq To</b></th>
	            <th><b>No Of Books</b></th>
	            <th><b>Book Size</b></th>
	            <th><b>Customer Name</b></th>
	            <th><b>Printed Date</b></th>
	        </tr>
		</thead>
		<tbody>
			{{-- variable for grand total --}}
			@php $grandTotalBookSize = 0; $grandTotalNoOfBook = 0; @endphp
			@foreach($consolidateDailyReports as $consolidateDailyReport)
			<tr>
				<th align="left" colspan="9"><b>&nbsp;&nbsp;Branch : {{ $consolidateDailyReport['branch_name'] }} - {{ $consolidateDailyReport['branch_code'] }}</b></th>
			</tr>
				@php $count = 1; $branchTotalBookSize = 0; $branchTotalNoOfBook = 0; @endphp
				@foreach($consolidateDailyReport['data'] as $report)
				<tr>
					<td>{{ $count++ }}</td>
					<td>{{ $report->transactioncodedescription }}</td>
					<td>{{ $report->cps_account_no }}</td>
					<td>{{ $report->cps_chq_no_from }}</td>
					<td>{{ $report->cps_chq_no_to }}</td>
					<td>{{ $report->cps_no_of_books }}</td>
					<td>{{ $report->cps_book_size }}</td>
					<td>{{ $report->cps_act_name }}</td>
					<td>{{ date('d-m-Y', strtotime($report->cps_date)) }}</td>
				</tr>
				@php 
					$branchTotalBookSize = $branchTotalBookSize + $report->cps_book_size; 
					$branchTotalNoOfBook = $branchTotalNoOfBook + $report->cps_no_of_books; 
				@endphp
				@endforeach
			<tr>
				<th align="right" colspan="5"><b>Branch Total &nbsp;&nbsp;</b></th>
				<th><b>{{ $branchTotalBookSize }}</b></th>
				<th><b>{{ $branchTotalNoOfBook }}</b></th>
				<th colspan="2"></th>
			</tr>
			<tr>
				<th colspan="9"></th>
			</tr>
			@php 
				$grandTotalBookSize = $grandTotalBookSize + $branchTotalBookSize; 
				$grandTotalNoOfBook = $grandTotalNoOfBook + $branchTotalNoOfBook; 
			@endphp
			@endforeach

			<tr>
				<th align="right" colspan="5"><b>Grand Total &nbsp;&nbsp;</b></th>
				<th><b>{{ $grandTotalBookSize }}</b></th>
				<th><b>{{ $grandTotalNoOfBook }}</b></th>
				<th colspan="2"></th>
			</tr>
		</tbody>
	</table>
</body>
</html>