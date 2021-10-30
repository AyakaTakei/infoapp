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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    //
    Route::get('/users', 'UserController@index');
    
    Route::get('/subjects', 'SubjectController@index');
    
    Route::get('/interviews', 'InterviewController@index');
    
    Route::get('/', 'StudentController@index')->name('student_index');
    //Route::get('/students/index', 'StudentController@index');
    Route::get('/students/create', 'StudentController@create');
    Route::get('/students/{student}', 'StudentController@show');
    Route::get('/students/{student}/edit', 'StudentController@edit');
    Route::put('/students/{student}', 'StudentController@update');
    Route::post('/students', 'StudentController@store');
    Route::get('/students/{interview}/interviews', 'InterviewController@show');
    Route::get('/interviews/{interview}/edit', 'InterviewController@edit');
    Route::put('/interviews/{interview}', 'InterviewController@update');
     Route::get('/interviews/{student}/create', 'InterviewController@create');
    Route::post('/students/{student}/interviews', 'InterviewController@store');
});

//Route::get('/home', 'HomeController@index')->name('home');
