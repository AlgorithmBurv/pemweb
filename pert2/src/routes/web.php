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

Route::get('/main', function () {
    return view('layouts.main', [

        "title" => "home"
    ]);
});
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('partials.home', [

        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('partials.about', [

        "title" => "about"
    ]);
});
Route::get('/blog', function () {
    return view('partials.blog', [

        "title" => "blog"
    ]);
});
Route::get('/navbar', function () {
    return view('partials.navbar', [

        "title" => "navbar"
    ]);
});
