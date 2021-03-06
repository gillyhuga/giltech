<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DashboardController;

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


Route::resource('/', HomeController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/listapp', ListController::class);

Route::resource('admin/authors', AuthorController::class);
Route::resource('admin/news', NewsController::class);
Route::resource('admin', DashboardController::class);

// Route::get('/', function () {
//     return view('user/index');
//     })->name('index');

// Route::get('/profile', function () {
//     return view('user/profile');
// });

// Route::get('/listapp', function () {
//     return view('user/listapp');
// });

// Route::get('/admin', function () {
//     return view('admin/dashboard');
// });

// Route::get('/admin/authors', function () {
//     return view('admin/authors');
// });
// Route::get('/admin/news', function () {
//     return view('admin/news');
// });
// Route::get('/p', function () {
//     \App\Authors::create([
//         'name' => 'Gilly'
//     ]);    
//     \App\Authors::create([
//         'name' => 'BOB'
//     ]); 
//     \App\Authors::create([
//         'name' => 'ss'
//     ]);
// });