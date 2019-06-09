@extends('teacher.base')

@section('title', 'Edit Teacher')

@section('content')
	<h1>Edit Teacher</h1>
	
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
	<form action="/teachers/{{ $teacher->id }}" method="post">
		@method('PUT')
		@csrf		
		<div class="form-group">
			<label for="name">Name:</label>		
			<input id="name" class="form-control" type="text" name="name" value="{{ old('name', $teacher->name) }}" >
		</div>
		<div class="form-group">
			<label for="email">Email:</label>		
			<input id="email" class="form-control" type="email" name="email" value="{{ old('email', $teacher->email) }}" >
		</div>
		<input class="btn btn-success btn-block" type="submit" value="Update">
	</form>
@endsection