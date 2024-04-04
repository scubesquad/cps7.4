<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Report Excel</title>
</head>
<body>
	<table border="1" align="center">
		<thead>
			<tr>
				<th colspan="6"><b>Customer Report.</b></th>
	        </tr>
			<tr>
				<th><b>Operator</b></th>
	            <th><b>Acc. No</b></th>
	            <th><b>Name</b></th>
	            <th><b>Chq From</b></th>
	            <th><b>Chq To</b></th>
	            <th><b>Date Of Issue</b></th>
	        </tr>
		</thead>
		<tbody>
			@foreach($reports as $report)
			<tr>
				<td>{{ $report->username }}</td>
				<td>{{ $report->cps_account_no }}</td>
				<td>{{ $report->cps_act_name }}</td>
				<td>{{ $report->cps_chq_no_from }}</td>
				<td>{{ $report->cps_chq_no_to }}</td>
				<td>{{ date('d-m-Y', strtotime($report->cps_date)) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>