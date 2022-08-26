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
    return view('welcome');
});

// this approach only works when url and view names are same
//Route::view('index', '/index');
 

Route::get('/index', function () {
    return view('site/index');
});

Route::get('/manager', function () {
    return view('admin/landing/index');
});

Route::get('/manager/tables', function () {
    return view('admin/tables');
});