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

Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/contact','PagesController@contact');

Route::get('/projects','PagesController@index');


Route::resource('/projects','PostController');

// Route::get('/projects/create','PagesController@create');

// Route::post('/projects','PagesController@store');

// Route::get('/projects/{projects}','PagesController@show');

// Route::get('/projects/{projects}/edit','PagesController@edit');

// Route::patch('/projects/{projects}','PagesController@update');

// Route::delete('/projects/{projects}','PagesController@destroy');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
