<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Printed Reports PDF</title>
	<style type="text/css">
		td{
			font-size: 10px;
		}

		th{
			font-size: 12px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h2>Sucessfully Printed Reports.</h2>
	<table border="1" align="center">
		<thead>
			<tr>
				<th>Operator</th>
	            <th>Acc. No</th>
	            <th>Name</th>
	            <th>Chq From</th>
	            <th>Chq To</th>
	            <th>Date Of Issue</th>
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