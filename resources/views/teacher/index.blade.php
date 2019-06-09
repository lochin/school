@extends('teacher.base')

@section('title', 'Teachers')

@section('content')
	<h1>Teachers</h1>
	
	<table class="table">
	  <caption><a class="btn btn-success" href="/teachers/create">Add Teacher</a></caption>
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Name</th>
		  <th scope="col">Email</th>
		</tr>
	  </thead>
	  <tbody>
	    @foreach($teachers as $teacher)
		  <tr>
		    <th scope="row">{{ $loop->iteration }}</th>
		    <td><a href="teachers/{{ $teacher->id }}">{{ $teacher->name }}</a></td>
		    <td><a href="teachers/{{ $teacher->id }}">{{ $teacher->email }}</a></td>
		  </tr>
	    @endforeach
	  </tbody>
	</table>
	
@endsection
