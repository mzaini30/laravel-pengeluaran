<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	@yield('head')
</head>
<body>
	<div class="container">
		@yield('konten')
	</div>
	<hr>
	<center>
		<p>&copy; Zen & Laravel 2018</p>
	</center>
	@yield('footer')
</body>
</html>