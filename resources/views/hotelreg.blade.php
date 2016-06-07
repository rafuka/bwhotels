@extends('layouts.master')


@section('title')
	Registro de Hotel - Bagwings
@stop


@section('header')
	
@stop



@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Registering new hotel</h1>
		</div>
		<div class="panel-body">
			<form  action="/register" method="POST">

				{{ csrf_field() }}
				<fieldset>
					<legend>Username Information</legend>
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" 
								type="text" 
								name="username" 
								id="username" 
								value="{{ old('username')}}">
						@if($errors->first('username'))
							<div class="error">
								<p>{{ $errors->first('username') }}</p>
							</div>
						@endif
					</div>

					<div class="form-group">
						<label for="email">e-mail</label>
						<input class="form-control" 
								type="email" 
								name="email" 
								id="email"
								value="{{old('email')}}">
						@if($errors->first('email'))
							<div class="error">
								<p>{{ $errors->first('email') }}</p>
							</div>
						@endif
					</div>

					<div class="form-group">
						<label for="tlf">Phone Number</label>
						<input class="form-control" 
								type="text" 
								name="tlf" 
								id="tlf" 
								value="{{old('tlf')}}">
						@if($errors->first('tlf'))
							<div class="error">
								<p>{{ $errors->first('tlf') }}</p>
							</div>
						@endif
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="password" id="password">
						@if($errors->first('password'))
							<div class="error">
								<p>{{ $errors->first('password') }}</p>
							</div>
						@endif
					</div>

					<div class="form-group">
						<label for="password_confirmation">Confirm Password</label>
						<input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
						@if($errors->first('password_confirmation'))
							<div class="error">
								<p>{{ $errors->first('password_confirmation') }}</p>
							</div>
						@endif
					</div>
				</fieldset>

				<fieldset>
					<legend>Hotel Information</legend>
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" 
								type="text" 
								name="name" 
								id="name"
								value="{{old('name')}}">
						@if($errors->first('name'))
							<div class="error">
								<p>{{ $errors->first('name') }}</p>
							</div>
						@endif
					</div>

					<div class="form-group">
						<label for="address">Address</label>
						<input class="form-control" 
								type="text" 
								name="address" 
								id="address"
								value="{{old('address')}}">
						@if($errors->first('address'))
							<div class="error">
								<p>{{ $errors->first('address') }}</p>
							</div>
						@endif
					</div>

					<div class="form-group">
						<label for="hab_num">Number of Rooms</label>
						<input class="form-control" 
								type="number" 
								name="hab_num" 
								id="hab_num"
								value="{{old('hab_num')}}">
						@if($errors->first('hab_num'))
							<div class="error">
								<p>{{ $errors->first('hab_num') }}</p>
							</div>
						@endif
					</div>

					<div class="form-group">
						<label for="stars">Stars</label>
						<select class="form-control" name="stars" id="stars">
							<option @if(old('stars') == '1') selected @endif value="1">1</option>
							<option @if(old('stars') == '2') selected @endif value="2">2</option>
							<option @if(old('stars') == '3') selected @endif value="3">3</option>
							<option @if(old('stars') == '4') selected @endif value="4">4</option>
							<option @if(old('stars') == '5') selected @endif value="5">5</option>
						</select>
						@if($errors->first('stars'))
							<div class="error">
								<p>{{ $errors->first('stars') }}</p>
							</div>
						@endif
					</div>

				</fieldset>

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
@stop


@section('footer')
	&copy; Bagwings 2016
@stop