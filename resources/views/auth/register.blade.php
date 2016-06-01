@extends('layouts.master')


@section('title')
	Register | Bagwings Area Hoteles
@stop


@section('header')
	<a href="/login">login</a>
@stop


@section('content')
	<form action="/register" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="{{ old('username') }}">
		</div>

		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" value="{{ old('email') }}">
		</div>

		<div class="form-group">
			<label for="tlf">Contact phone number:</label>
			<input type="text" name="tlf" id="tlf" value="{{ old('tlf') }}">
		</div>

		<div class="form-group">
			<label for="username">Password:</label>
			<input type="password" name="password" id="password">
		</div>

		<div class="form-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" name="password_confirmation" id="password_confirmation">
		</div>

		<button type="submit" class="btn btn-primary">Register</button>
	</form>
@stop


@section('footer')
	<p>&copy; Bagwings 2016</p>
@stop