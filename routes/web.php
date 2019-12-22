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
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/men', function () {
    return view('men');
});
Route::get('/women', function () {
    return view('women');
});
Route::get('/deals', function () {
    return view('deals');
});
Route::get('/lookbook', function () {
    return view('lookbook');
});
Route::resource('products', 'ProductController'); 
Route::get('create', 'ProductController@create'); 

