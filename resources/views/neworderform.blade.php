@extends('layouts.master')



@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>New Order</h1>
		</div>
		<div class="panel-body">
			<form  action="/neworder" method="POST">

				{{ csrf_field() }}
				<div class="form-group">
					<label for="client_name">Client Name</label>
					<input class="form-control" type="text" name="client_name" id="client_name" value="{{ old('client_name') }}">
				</div>
				<div class="form-group">
					<label for="id_num">Identification</label>
					<input class="form-control" type="text" name="id_num" id="id_num" value="{{ old('id_num') }}">
				</div>
				<div class="form-group">
					<label for="contact">e-mail or phone number</label>
					<input class="form-control" type="text" name="contact" id="contact" value="{{ old('contact') }}">
				</div>
				<div class="form-group">
					<label for="lug_num">Number of Bags</label>
					<input class="form-control" type="number" name="lug_num" id="lug_num" >
				</div>
				<div class="form-group">
					<label for="terminal">Terminal</label>
					<select class="form-control" name="terminal" id="terminal">
						<option value="T1" @if(old('terminal') == 'T1') selected @endif >T1</option>
						<option value="T2" @if(old('terminal') == 'T2') selected @endif >T2</option>
					</select>
				</div>
				<div class="form-group">
					<label for="time"></label>
					<select class="form-control" name="time" id="time">
						<option>TODO: elegir rango de tiempos</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
@stop

