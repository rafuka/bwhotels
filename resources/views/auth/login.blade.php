@extends('layouts.master')


@section('title')
	Login | Bagwings Area Hoteles
@stop



@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>Log In</h1>
		</div>
		<div class="panel-body">
			<form action="/login" method="POST">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="username">Username:</label>
					<input class="form-control" type="text" name="username" id="username">
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
					<input class="form-control" type="password" name="password" id="password">
				</div>

				<button type="submit" class="btn btn-primary">Log In</button>
			</form>
		</div>
	</div>
@stop


@section('footer')
	<p>&copy; Bagwings 2016</p>
@stop