<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Aprendiendo Laravel')</title>
	<style type="text/css">
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	@include('partials/nav')
	@yield('content')
</body>
</html>