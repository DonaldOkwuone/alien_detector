@extends('master')

@section('content')

<h3>All Available Aliens</h3>
<table align="center" >
	 
	<th>Country</th>
	<th>City</th>
	<th>Date</th>
	<th>Number Of Aliens</th>
	<th>Color of Alien</th>
	@foreach($record as $key=> $record)
	<tr>
		
			<td>{{$record->country}}</td>
			<td>{{$record->city}}</td>
			<td>{{$record->date}}</td>
			<td>{{$record->no_of_aliens}}</td>
			<td>{{$record->color_of_aliens}}</td>
	    
	</tr> 
	@endforeach
</table>
 

@endsection