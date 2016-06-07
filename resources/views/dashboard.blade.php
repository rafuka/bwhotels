@extends('layouts.master')

@section('title')
	Dashboard - Bagwings Area Hoteles
@stop

@section('header')

@stop




@section('content')
	<h2>{{ $hotel['name'] }}</h2>
	<a href="/neworder">Create new order</a>
	<h3>List of orders</h3>
	<table>
		<caption>Orders</caption>
		<thead>
			<th>Date created</th>
			<th>Client Name</th>
			<th>Identification</th>
			<th>Number of bags</th>
			<th>Terminal</th>
			<th>Pick up Time</th>
			<th>Status</th>
			
			

		</thead>
		<tbody>
			@foreach($orders as $order)
				<tr>
					<td>{{ $order['created_at'] }}</td>
					<td>{{ $order['client_name'] }}</td>
					<td>{{ $order['id_num'] }}</td>
					<td>{{ $order['lug_num'] }}</td>
					<td>{{ $order['terminal'] }}</td>
					<td>{{ $order['time'] }}</td>
					<td>{{ $order['status'] }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	
@stop

@section('footer')
	&copy; Bagwings 2016
@stop