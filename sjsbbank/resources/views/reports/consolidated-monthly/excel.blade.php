<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consolidated Report</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th colspan="4" align="left">Consolidated Cheque Book Print Report for the {{ Request()->start_date }} to {{ Request()->end_date }}</th>
			</tr>
		</thead>
	</table>

	@php $bankNoOfBooks = 0; $bankTotalLeaves = 0; @endphp
	@foreach($consolidateMonthlyReports as $consolidateMonthlyReport)
	<table border="1">
		<tbody>
			<tr>
				<th align="left" colspan="4"><b>&nbsp;&nbsp;&nbsp;{{ $consolidateMonthlyReport['branch_name'] }} - {{ str_pad($consolidateMonthlyReport['branch_code'], 3, "0", STR_PAD_LEFT	) }}</b></th>
			</tr>
			<tr>
				<td></td>
				<td><b>No Of Books</b></td>
				<td><b>Book Size</b></td>
				<td><b>Total Leaves</b></td>
			</tr>
			@php $branchNoOfBooks = 0; $branchTotalLeaves = 0; @endphp
			@foreach($consolidateMonthlyReport['data'] as $key => $reports)
				
				@php $trNoOfBooks = 0; $trTotalLeaves = 0; @endphp
				@foreach($reports as $report)
				<tr>
					<td></td>
					<td>{{ $report->cps_no_of_books }}</td>
					<td>{{ $report->cps_book_size }}</td>
					<td>{{ $report->total_leave }}</td>
				</tr>
				@php 
					$trNoOfBooks = $trNoOfBooks + $report->cps_no_of_books; 
					$trTotalLeaves = $trTotalLeaves + $report->total_leave; 
				@endphp
				@endforeach
				<tr>
					<th><b>{{ $transactionKey[$key] }}</b></th>
					<th><b>{{ $trNoOfBooks }}</b></th>
					<th></th>
					<th><b>{{ $trTotalLeaves }}</b></th>
				</tr>
				@php 
					$branchNoOfBooks = $branchNoOfBooks + $trNoOfBooks; 
					$branchTotalLeaves = $branchTotalLeaves + $trTotalLeaves; 
				@endphp
			@endforeach
				<tr>
					<th><b>{{ $consolidateMonthlyReport['branch_name'] }}</b></th>
					<th><b>{{ $branchNoOfBooks }}</b></th>
					<th></th>
					<th><b>{{ $branchTotalLeaves }}</b></th>
				</tr>
				@php 
					$bankNoOfBooks = $bankNoOfBooks + $branchNoOfBooks; 
					$bankTotalLeaves = $bankTotalLeaves + $branchTotalLeaves; 
				@endphp
				<tr><th colspan="4"></th></tr>
				<tr><th colspan="4"></th></tr>
		</tbody>
	</table>
	
	@endforeach

	<table border="1">
		<thead>
			<tr>
				<th><b>Bank Total</b></th>
				<th><b>{{ $bankNoOfBooks }}</b></th>
				<th></th>
				<th><b>{{ $bankTotalLeaves }}</b></th>
			</tr>
		</thead>
	</table>
</body>
</html>