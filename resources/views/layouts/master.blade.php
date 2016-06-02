<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" >
	<link rel="stylesheet" type="text/css" href="css/styles.css" >

	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<title>@yield('title', 'Bagwings Area de Hoteles')</title>
</head>
<body>
	<header class="container-fluid">
		@yield('header')
		<div class="logo-wrap">
			<a href="http://bwhotels.loc">
				<img id="logo" src="img/logo.png" title="Bagwings Logo." alt="Logo">
			</a>
		</div>
		<nav class="nav-bar">
			<ul>
				@if(isset($user) and $user['is_admin'] == true)
					<li><a href="/">Dashboard</a></li>
					<li><a href="/register">Register</a></li>
				@endif
				@if(\Auth::check())
					<li><a href="/logout">Log Out</a></li>
				@endif
			</ul>
		</nav>
		
	</header>

	<main class="container">
		@yield('content')
	</main>

	<footer>
		@yield('footer')
	</footer>
</body>
</html>