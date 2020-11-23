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

//Route::get('/[linknya]', ControllerYgHandleRequest);
//Route::post('/[linknya]', ControllerYgHandleRequest);

/*Route::post('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//$basepath_controller = "App\Http\Controllers\";

// Auth::routes();

Route::get('/', 'App\Http\Controllers\AwalController@index');
Route::get('/index', 'App\Http\Controllers\AwalController@index');
Route::get('/login', 'App\Http\Controllers\AwalController@login')->name('login');
Route::get('/register', 'App\Http\Controllers\AwalController@register');
Route::post('/tangkap', 'App\Http\Controllers\AwalController@tangkap');
Route::post('/authenticate', 'App\Http\Controllers\AwalController@authenticate');
Route::get('/logout', 'App\Http\Controllers\AwalController@logout');



// Route::group(['middleware' => 'admin'], function () {
 
//     // Route::get('about', 'App\Http\Controllers\AwalController@about')->name('about');
//     Route::get('logout', 'App\Http\Controllers\AwalController@logout')->name('logout');
    
 
// });

// ABOUT YG UDAH LOGIN
// Route::get('/about2', 'App\Http\Controllers\AwalController@about2');

// Edit file routes/web.php
Route::get('/about', 'App\Http\Controllers\AwalController@about');
Route::get('/index2', 'App\Http\Controllers\AwalController@index2');

// Route::get('/login', 'App\Http\Controllers\AwalController@login')->middleware('auth');

Route::get('/profile', 'App\Http\Controllers\AwalController@profile');
