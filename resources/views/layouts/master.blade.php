<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}" >

	<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/js/bootstrap.min.js') }}"></script>

	<title>@yield('title', 'Bagwings Area de Hoteles')</title>
</head>
<body>
	<header class="container-fluid">
		@yield('header')
		<div class="logo-wrap">
			<a href="http://bwhotels.loc">
				<img id="logo" src="{{ URL::asset('img/logo.png') }}" title="Bagwings Logo." alt="Logo">
			</a>
		</div>
		<nav class="nav-bar">
			<ul>
				@if(\Auth::check())
					@if(\Auth::user()->is_admin)
						<li><a @if(isset($currpage) && $currpage == 'dashboard') class="current" @endif href="/">Dashboard</a></li>
						<li><a @if(isset($currpage) && $currpage == 'register') class="current" @endif href="/register">Register</a></li>
					@endif
					<li><a href="/logout">Log Out</a></li>
				@endif
			</ul>
		</nav>
		
	</header>
	@if(Session::has('flash_message'))
		<div class="flash alert alert-success">
			{{ Session::get('flash_message') }}
		</div>
	@endif

	<main class="container">
		@yield('content')
	</main>

	<footer>
		@yield('footer')
	</footer>
</body>
</html>