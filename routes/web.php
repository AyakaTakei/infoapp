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


Route::get('/users', 'UserController@index');

Route::get('/', 'StudentController@index');

Route::get('/subjects', 'SubjectController@index');

Route::get('/interviews', 'InterviewController@index');

Route::get('/students/home', 'StudentController@home', function(){
  return view("Students.home");
});

Route::get('/students/index', 'StudentController@index', function() {
    return view("Students.index");
});

Route::get('/students/create', 'StudentController@create', function() {
    return view("Students.create");
});

Route::get('/students/{student}', 'StudentController@show', function() {
    return view("Students.show");
});