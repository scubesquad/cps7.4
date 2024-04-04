<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consolidated Reports Daily PDF</title>
	<style type="text/css">
		td{
			font-size: 9px;
			padding:8px;
		}

		th{
			font-size: 10px;
			font-weight: bold;
			padding:8px;
		}
	</style>
</head>
<body>
	<h2>Sucessfully Printed Reports for period {{ date('d-m-Y', strtotime(Request()->start_date)) }} to {{ date('d-m-Y', strtotime(Request()->end_date)) }}</h2>
	<table border="1" align="center">
		<thead>
			<tr>
				<th>Sr.No.</th>
	            <th>Acc. Type</th>
	            <th>Account. No.</th>
	            <th>Chq From</th>
	            <th>Chq To</th>
	            <th>No Of Books</th>
	            <th>Book Size</th>
	            <th>Customer Name</th>
	            <th>Printed Date</th>
	            <th>Cust. Sign</th>
	        </tr>
		</thead>
		<tbody>
			{{-- variable for grand total --}}
			@php $grandTotalBookSize = 0; $grandTotalNoOfBook = 0; @endphp
			@foreach($consolidateDailyReports as $consolidateDailyReport)
			<tr>
				<th align="left" colspan="10">&nbsp;&nbsp;Branch : {{ $consolidateDailyReport['branch_name'] }} - {{ $consolidateDailyReport['branch_code'] }}</th>
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
					<td></td>
				</tr>
				@php 
					$branchTotalBookSize = $branchTotalBookSize + $report->cps_book_size; 
					$branchTotalNoOfBook = $branchTotalNoOfBook + $report->cps_no_of_books; 
				@endphp
				@endforeach
			<tr>
				<th align="right" colspan="5">Branch Total &nbsp;&nbsp;</th>
				<th>{{ $branchTotalBookSize }}</th>
				<th>{{ $branchTotalNoOfBook }}</th>
				<th colspan="3"></th>
			</tr>
			<tr>
				<th colspan="10"></th>
			</tr>
			@php 
				$grandTotalBookSize = $grandTotalBookSize + $branchTotalBookSize; 
				$grandTotalNoOfBook = $grandTotalNoOfBook + $branchTotalNoOfBook; 
			@endphp
			@endforeach

			<tr>
				<th align="right" colspan="5">Grand Total &nbsp;&nbsp;</th>
				<th>{{ $grandTotalBookSize }}</th>
				<th>{{ $grandTotalNoOfBook }}</th>
				<th colspan="3"></th>
			</tr>
		</tbody>
	</table>
</body>
</html>