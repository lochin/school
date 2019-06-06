<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
	<title>Teachers</title>
</head>
<body>
	<h1>Teachers</h1>
	<ul>
	    @foreach($teachers as $teacher)
		    <li>{{ $teacher->name }}</li>
		@endforeach
	</ul>
</body>
</html>