@extends('layouts.default')

@section('content')
<h2>Live</h2>

<table style="width: 100%;">
	<thead>
		<tr>
			<th>Date</th>
			<th>Venue</th>
			<th>Location</th>
			<th>With</th>
			<th>Tickets</th>
		</tr>
	</thead>
	<tbody>
@foreach($results as $r)
	<tr>
		<td>{{ date('n-j-y',strtotime($r['datetime'])) }}</td>
		<td>{{ $r['venue']['name'] }}</td>
		<td>{{ $r['formatted_location'] }}</td>
		<td></td>
		<td></td>
	</tr>
@endforeach
	</tbody>
</table>
@stop