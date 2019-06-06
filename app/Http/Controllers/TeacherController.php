<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
	{
		$teachers = DB::table('teachers')->get();		
		
		return view('teacher.index', ['teachers' => $teachers]);
	}
	
	public function create()
	{
		return view('teacher.create');
	}
	
	public function store(Request $request)
	{
		DB::table('teachers')->insert([
			'name' => $request->name, 
			'created_at' => now(),
			'updated_at' => now(),
		]);
		return redirect('/teachers');
	}
}
