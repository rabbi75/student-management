<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'App\Http\Controllers\StudentController@index')->name('student.welcome');
Route::get('/create', 'App\Http\Controllers\StudentController@create')->name('student.create');
Route::get('/show/{id}', 'App\Http\Controllers\StudentController@show')->name('student.show');
Route::post('/store', 'App\Http\Controllers\StudentController@store')->name('student.store');
Route::get('/edit/{id}', 'App\Http\Controllers\StudentController@edit')->name('student.edit');
Route::post('/update/{id}', 'App\Http\Controllers\StudentController@update')->name('student.update');
Route::get('/delete/{id}', 'App\Http\Controllers\StudentController@destroy')->name('student.delete');

Route::get('/new/search', 'App\Http\Controllers\StudentController@search')->name('search');


Route::get('course', 'App\Http\Controllers\CourseController@index')->name('course.index');
Route::get('course/create', 'App\Http\Controllers\CourseController@create')->name('course.create');
Route::post('course/store', 'App\Http\Controllers\CourseController@store')->name('course.store');
Route::get('course/show/{id}', 'App\Http\Controllers\CourseController@show')->name('course.show');
Route::get('course/edit/{id}', 'App\Http\Controllers\CourseController@edit')->name('course.edit');
Route::post('course/update/{id}', 'App\Http\Controllers\CourseController@update')->name('course.update');
Route::get('course/delete/{id}', 'App\Http\Controllers\CourseController@destroy')->name('course.delete');


Route::get('takes', 'App\Http\Controllers\TakesController@index')->name('takes.index');
Route::get('takes/create', 'App\Http\Controllers\TakesController@create')->name('taks.create');
Route::post('takes/store', 'App\Http\Controllers\TakesController@store')->name('takes.store');
Route::get('takes/edit/{id}', 'App\Http\Controllers\TakesController@edit')->name('takes.edit');
Route::post('takes/update/{id}', 'App\Http\Controllers\TakesController@update')->name('takes.update');
Route::get('takes/delete/{id}', 'App\Http\Controllers\TakesController@destroy')->name('takes.delete');
