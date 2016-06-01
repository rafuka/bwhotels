@extends('layouts.master')

@section('title')
	Dashboard - Bagwings Area Hoteles
@stop

@section('header')
	<h1>Dashboard</h1>
	@if($user['is_admin'] == true)
		<a href="/register">Register new Hotel</a>
	@endif
@stop

@section('content')
	<h2>Lista de pedidos</h2>
@stop

@section('footer')
	&copy; Bagwings 2016
@stop