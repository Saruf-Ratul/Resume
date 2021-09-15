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

// Route::get('/About', function () {
//     return view('About');
// });

// Route::get('/Contact', function () {
//     return view('Contact');
// });

Route::get('/', 'App\Http\Controllers\SiteController@Home');

Route::get('/About', 'App\Http\Controllers\SiteController@About');

Route::get('/Services', 'App\Http\Controllers\SiteController@Services');

Route::get('/Skills', 'App\Http\Controllers\SiteController@Skills');

Route::get('/Contact', 'App\Http\Controllers\SiteController@Contact');

Route::get('/Portfolio', 'App\Http\Controllers\SiteController@Portfolio');

Route::get('/Experience', 'App\Http\Controllers\SiteController@Experience');


Route::get('/Name/{namevalue}','App\Http\Controllers\DemoController@MyName');

Route::get('/Name/{fastname}/{lastname}','App\Http\Controllers\DemoController@fullname');




