<?php $currpage = 'dashboard'; ?>
@extends('layouts.master')


@section('content')
	
	

	

	<table class="panel panel-default">
		<caption class="panel-heading"><h2>Hotel List</h2></caption>
		<thead>
			<th>Hotel Name</th>
			<th>Num orders</th>
			<th>Pending Orders</th>
			
			
			

		</thead>
		<tbody>
			@foreach($hotels as $hotel)
				<tr>
					<td><a href="/hotels/{{ $hotel->id }}">{{ $hotel->name }}</a></td>
					<td>{{ $hotel->order->count() }}</td>
					<td>{{ $hotel->order->where('status', 'pending')->count() }}</td>
					
				</tr>
			@endforeach
		</tbody>
	</table>

@stop