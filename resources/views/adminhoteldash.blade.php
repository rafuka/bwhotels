<?php $currpage = 'dashboard'; ?>
@extends('layouts.master')


@section('content')
	<h2>{{ $hotel_name }}</h2>

	<table class="panel panel-default">
		<caption class="panel-heading">Pending Orders</caption>
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
				@if($order->status == 'pending')
				<tr>
					<td>{{ $order['created_at'] }}</td>
					<td>{{ $order['client_name'] }}</td>
					<td>{{ $order['id_num'] }}</td>
					<td>{{ $order['lug_num'] }}</td>
					<td>{{ $order['terminal'] }}</td>
					<td>{{ $order['time'] }}</td>
					<td class="pending">{{ $order['status'] }}</td>
					<td><a href="/order/confirm/{{ $order->id }}">Confirm</a></td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>

	<table class="panel panel-default">
		<caption class="panel-heading">Delivered Orders</caption>
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
				@if($order->status == 'delivered')
				<tr>
					<td>{{ $order['created_at'] }}</td>
					<td>{{ $order['client_name'] }}</td>
					<td>{{ $order['id_num'] }}</td>
					<td>{{ $order['lug_num'] }}</td>
					<td>{{ $order['terminal'] }}</td>
					<td>{{ $order['time'] }}</td>
					<td class="delivered">{{ $order['status'] }}</td>
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>

	<table class="panel panel-default">
		<caption class="panel-heading">Cancelled Orders</caption>
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
				@if($order->status == 'cancelled')
				<tr>
					<td>{{ $order['created_at'] }}</td>
					<td>{{ $order['client_name'] }}</td>
					<td>{{ $order['id_num'] }}</td>
					<td>{{ $order['lug_num'] }}</td>
					<td>{{ $order['terminal'] }}</td>
					<td>{{ $order['time'] }}</td>
					<td class="cancelled">{{ $order['status'] }}</td>
					
				</tr>
				@endif
			@endforeach
		</tbody>
	</table>
@stop	