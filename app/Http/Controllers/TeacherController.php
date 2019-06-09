<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function index()
	{		
		$teachers = Teacher::all();	
		
		return view('teacher.index', ['teachers' => $teachers]);
	}
	
	public function show($id)
	{		
		$teacher = Teacher::findOrFail($id);
		return view('teacher.show', ['teacher' => $teacher]);
	}
	
	public function create()
	{
		return view('teacher.create');
	}
	
	public function store(Request $request)
	{	
		$request->validate([
			'name' => 'bail|required|alpha|min:3',
			'email' => 'bail|required|email',
		]);
		
		$teacher = new Teacher;
		$teacher->name = $request->name;
		$teacher->email = $request->email;
		$teacher->save();
		
		return redirect('/teachers');
	}
	
	public function edit($id)
	{
		$teacher = Teacher::find($id);
		
		return view('teacher.edit', ['teacher' => $teacher]);		
	}
	
	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'bail|required|alpha|min:3',
			'email' => 'bail|required|email',
		]);
		
		$teacher = Teacher::find($id);
		$teacher->name = $request->name;
		$teacher->email = $request->email;
		$teacher->save();
		return redirect('/teachers/' . $id);
	}

    public function destroy($id)
	{
		$teacher = Teacher::find($id);
		$teacher->delete();
		return redirect('/teachers');
	}	
	
}
