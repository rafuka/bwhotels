@extends('layouts.master')


@section('title')
	Login | Bagwings Area Hoteles
@stop


@section('header')
	<p>Bagwings</p>
@stop


@section('content')
	<form action="/login" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username">
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
		</div>

		<button type="submit" class="btn btn-primary">Log In</button>
	</form>
@stop


@section('footer')
	<p>&copy; Bagwings 2016</p>
@stop