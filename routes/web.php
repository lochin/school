<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teachers', 'TeacherController@index'); // All Teachers

Route::get('/teachers/create', 'TeacherController@create'); // Show create form

Route::get('/teachers/{id}', 'TeacherController@show'); // Teacher Details

Route::post('/teachers', 'TeacherController@store'); // Create a Teacher

Route::get('/teachers/{id}/edit', 'TeacherController@edit'); // Show edit form

Route::put('/teachers/{id}', 'TeacherController@update'); // Edit Teacher

Route::delete('/teachers/{id}', 'TeacherController@destroy'); // Delete Teacher







