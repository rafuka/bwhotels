@extends('layouts.master')


@section('title')
	Registro de Hotel - Bagwings
@stop


@section('header')
	<h1>Registering new hotel</h1>
@stop


@section('content')
	<form action="/register" method="POST">

		{{ csrf_field() }}
		<fieldset>
			<legend>Username Information</legend>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
			</div>

			<div class="form-group">
				<label for="email">e-mail</label>
				<input type="email" name="email" id="email">
			</div>

			<div class="form-group">
				<label for="tlf">Phone Number</label>
				<input type="text" name="tlf" id="tlf">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</div>

			<div class="form-group">
				<label for="password_confirmation">Confirm Password</label>
				<input type="password" name="password_confirmation" id="password_confirmation">
			</div>
		</fieldset>

		<fieldset>
			<legend>Hotel Information</legend>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name">
			</div>

			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" id="address">
			</div>

			<div class="form-group">
				<label for="hab_num">Number of Rooms</label>
				<input type="number" name="hab_num" id="hab_num">
			</div>

			<div class="form-group">
				<label for="stars">Stars</label>
				<select name="stars" id="stars">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>

		</fieldset>
		@foreach($errors->all() as $error)
			{{ $error }}<br>
		@endforeach

		<button type="submit" class="btn btn-primary">Register</button>
	</form>
@stop


@section('footer')
	&copy; Bagwings 2016
@stop