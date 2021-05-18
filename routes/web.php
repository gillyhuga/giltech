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

Route::get('/', function () {
    return view('user/index');
});

Route::get('/profile', function () {
    return view('user/profile');
});

Route::get('/listapp', function () {
    return view('user/listapp');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/authors', function () {
    return view('admin/authors');
});
Route::get('/admin/news', function () {
    return view('admin/news');
});