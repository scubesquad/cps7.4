<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reprinted Reports Excel</title>
</head>
<body>

	

	<table>
		<thead>
			<tr>
				<th colspan="11" align="center"><b>Reprinted Reports for period : {{ date('d-m-Y', strtotime(Request()->start_date)) }} to {{ date('d-m-Y', strtotime(Request()->end_date)) }}</b></th>
			</tr>
			<tr>
				<th><b>SR. NO.</b></th>
				<th><b>OPERATOR</b></th>
				<th><b>BRANCH NAME</b></th>
				<th><b>TRANSACTION TYPE</b></th>
				<th><b>CUSTOMER NAME</b></th>
				<th><b>ACCOUNT NO</b></th>
				<th><b>CHQ. FROM</b></th>
				<th><b>CHQ. TO</b></th>
				<th><b>BOOK SIZE</b></th>
				<th><b>NO OF BOOKS</b></th>
				<th><b>DATE OF ISSUE</b></th>
			</tr>
		</thead>
		<tbody>
			@php $count = 1; @endphp
			@foreach($reports as $report)
			<tr>
				<td>{{ $count++ }}</td>
				<td>{{ $report->username }}</td>
				<td>{{ $report->cps_branchmicr_code }}</td>
				<td>{{ $report->transactioncodedescription }}</td>
				<td>{{ $report->cps_act_name }}</td>
				<td>{{ $report->cps_account_no }}</td>
				<td>{{ $report->cps_chq_no_from }}</td>
				<td>{{ $report->cps_chq_no_to }}</td>
				<td>{{ $report->cps_book_size }}</td>
				<td>{{ $report->cps_no_of_books }}</td>
				<th>{{ date('d-m-Y', strtotime($report->cps_date)) }}</th>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>