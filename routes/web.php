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

Route::resource('projects','ProjectsController')->middleware('auth');
Route::patch('/tasks/{task}','ProjectTaskController@update');
/*
Route::get('/projects','ProjectsController@index');
Route::get('/projects/create','ProjectsController@create');
Route::post('/projects','ProjectsController@store');
Route::patch('/projects/{project}',"ProjectsController@update");
Route::get('/projects/{project}/edit',"ProjectsController@edit");

Route::delete('/projects/{project}',"ProjectsController@destroy");
Route::get('/projects/{project}',"ProjectsController@show");

Route::get('/posts','PostController@index');
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
