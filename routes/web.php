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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AuthController@index');
Route::post('/login', 'AuthController@login'); 
Route::get('/registration', 'AuthController@registration');
Route::post('/registration', 'AuthController@postRegistration'); 
Route::get('/dashboard', 'AuthController@dashboard'); 
Route::get('/logout', 'AuthController@logout');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::patch('/students/{student}', 'StudentsController@update');

// Route::resource('students', 'StudentsController');

Route::get('/books', 'BooksController@index');

Route::get('/mahasiswa', 'MahasiswaController@index');