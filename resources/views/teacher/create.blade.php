<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> 
	<title>Create Teachers</title>
</head>
<body>
	<h1>Create Teacher</h1>
	
	<form action="/teachers" method="post">
		@csrf
		<label>Name:</label>
		<input type="text" name="name" required >
		<input type="submit" value="Create">
	</form>
</body>
</html>