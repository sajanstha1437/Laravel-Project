<?php

/*
use Illuminate\Support\Facades\Route;


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('student');
});
*/

Route::get('/', function () {
    return view('welcome');
});

//Route for Student Database

Route::get('/student', "StudentController@index");
Route::get('/student/edit/{id}', "StudentController@edit");
Route::get('/student/show/{id}', "StudentController@show");
Route::get('/student/create', "StudentController@create");

Route::post('/student/store', "StudentController@store");
Route::post('/student/update/{id}', "StudentController@update");

//Route for Teacher Database

Route::get('/teacher', "TeacherController@index");
Route::get('/teacher/create', "TeacherController@create");
Route::get('/teacher/show/{id}', "TeacherController@show");
Route::get('/teacher/edit/{id}', "TeacherController@edit");

Route::post('/teacher/store', "TeacherController@store");
Route::post('/teacher/update/{id}', "TeacherController@update");



