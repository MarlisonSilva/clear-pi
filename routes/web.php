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
    return view('map');
});

Route::get('/template', function () {
    return view('layout/template');
});

Route::get('/truck', function() {
    return view('trucks/truck');
});

Route::get('/worker', function() {
    return view('workers/worker');
});

Route::get('/zone', function() {
    return view('zones/zone');
});
