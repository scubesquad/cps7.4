<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output File Excel</title>
</head>
<body>

	

	<table>
		<thead>
			<tr>
				<th><b>Customer name</b></th>
				<th><b>A/C. No.</b></th>
				<th><b>Cheque Series</b></th>
			</tr>
		</thead>
		<tbody>
			@php $count = 1; @endphp
			@foreach($reports as $report)
			<tr>
				<td>{{ $report->cps_act_name }}</td>
				<td>{{ $report->cps_account_no }}</td>
				<td>{{ $report->cps_chq_no_from }} - {{ $report->cps_chq_no_to }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>