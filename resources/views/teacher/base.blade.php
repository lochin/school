<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" >
</head>
<body>
    <div class="container my-5">
		@yield('content')
	</div>		
</body>
</html>