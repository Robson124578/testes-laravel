<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

	@component('components.component-header')@endcomponent

	@component('components.component-menu')@endcomponent

	@yield('conteudo')

</body>
</html>