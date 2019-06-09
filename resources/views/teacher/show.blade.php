@extends('teacher.base')

@section('title', 'Teachers Details')

@section('content')
	<div class="card">
	  <div class="card-header text-primary ">
		<div class="row mb-2 text-center text-dark">
			<div class="col">Name: {{ $teacher->name }}</div>
			<div class="col">Email: {{ $teacher->email }}</div>		 
		</div>
	  <ul class="list-group list-group-flush">
		<li class="list-group-item">Created: {{ $teacher->created_at }}</li>
		<li class="list-group-item">Updated: {{ $teacher->updated_at }}</li>
	  </ul>
	  <div class="card-footer text-muted">
	    <div class="row">
			<div class="col">
				<form action="/teachers/{{ $teacher->id }}" method="post">
					@method('DELETE')
					@csrf
					<input class="btn btn-danger btn-block" type="submit" value="DELETE">
				</form>
			</div>
			<div class="col">
				<a href="/teachers/{{ $teacher->id }}/edit" class="btn btn-warning btn-block">EDIT</a>
			</div>
		</div>		
	  </div>
	</div>	
	
@endsection