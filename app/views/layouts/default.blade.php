<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		@include('includes.styles')
	</head>

	<body>
		<h1>Lockets</h1>
		@include('includes.nav')
		@include('includes.social')

		@yield('content')
		@include('includes.scripts')
	</body>
</html>