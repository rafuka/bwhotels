@extends('layouts.auth')


@section('title')
	Login | Bagwings Area Hoteles
@stop


@section('header')
	<p>Bagwings</p>
@stop


@section('content')
	<form>
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">

		<label for="password">Password:</label>
		<input type="password" name="password" id="password">

		<input type="submit">
	</form>
@stop


@section('footer')
	<p>&copy; Bagwings 2016</p>
@stop