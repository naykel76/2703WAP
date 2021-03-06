@extends('layouts/master')

@section('title')
Search Results
@endsection

@section('content')
<h2>Australian Prime Ministers</h2>
<h3>Search results containing {{ '"' . $name . '"' ?? '' }} {{ '"' . $year . '"' ?? '' }} {{ '"' . $state . '"' ?? '' }}</h3>

<table class="bordered">
	<thead>
		<tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
	</thead>
	<tbody>
		
		@if (count($pmsArray) >= 1)
			@foreach($pmsArray as $pm)
				<tr>
					<td>{{$pm['index']}}</td>
					<td>{{$pm['name']}}</td>
					<td>{{$pm['from']}}</td>
					<td>{{$pm['to']}}</td>
					<td>{{$pm['duration']}}</td>
					<td>{{$pm['party']}}</td>
					<td>{{$pm['state']}}</td>
				</tr>
			@endforeach
		@else
		    <h4>No results found!</h4>
		@endif
		
	</tbody>
</table>

@endsection