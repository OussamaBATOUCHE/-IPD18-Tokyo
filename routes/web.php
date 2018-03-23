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

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/hello', 'HomeController@hello');

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/dash', function () {
    return view('layouts.dash');
});
Route::get('/addEvnt', function () {
    return view('layouts.addEvnt');
});

Route::get('/listEvnt', function () {
    return view('layouts.listEvnt');
});

Route::get('/listCmt', function () {
    return view('layouts.listCmt');
});
Route::get('/profile', function () {
    return view('layouts.profile');
});
Route::post('/uploadIMG', 'HomeController@uploadIMG');
