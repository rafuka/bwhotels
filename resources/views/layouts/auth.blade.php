<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" >

	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<title>@yield('title', 'Bagwings Area de Hoteles')</title>
</head>
<body>
	<header>
		@yield('header')
	</header>
	<main class="container">
		@yield('content')
	</main>
	<footer>
		@yield('footer')
	</footer>
</body>
</html>