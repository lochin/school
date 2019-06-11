@extends('teacher.base')

@section('title', 'Create Teacher')

@section('content')
	<h1>Create Teacher</h1>	
	
	<form action="/teachers" method="post">
		@csrf		
	
		<div class="form-group">
			<label for="name">Name:</label>		
			<input id="name" class="form-control @if($errors->any()) @if($errors->has('name')) is-invalid @else is-valid @endif @endif" type="text" name="name" value="{{ old('name') }}" >
			<div class="invalid-feedback">
				@error('name')
					{{ $message }}
				@enderror
			</div>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>		
			<input id="email" class="form-control @if($errors->any()) @if($errors->has('email')) is-invalid @else is-valid @endif @endif" type="email" name="email" value="{{ old('email') }}" >
			<div class="invalid-feedback">
				@error('email')
					{{ $message }}
				@enderror
			</div>
		</div>
		<input class="btn btn-success btn-block" type="submit" value="Create">
	</form>
@endsection