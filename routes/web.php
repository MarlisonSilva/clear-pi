<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\TruckController;
use App\Http\Controllers\web\WorkerController;
use App\Http\Controllers\web\ZoneController;
// Temporários
use App\Http\Controllers\temporary\TruckTempController;
use App\Http\Controllers\temporary\WorkerTempController;
use App\Http\Controllers\temporary\ZoneTempController;


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

// Login e Register

Route::get('/clean', function(){
    return view('layout/clean-template');
});
Route::get('/login', function () {
    return view('authentication/login');
});

Route::get('/register', function () {
    return view('authentication/register');
});

Route::get('/', function () {
    return view('map');
});

Route::get('/template', function () {
    return view('layout/template');
});

Route::resource('/trucks', TruckController::class);
// Route::resource('/trucksTemp', TruckTempController::class);

Route::get('/worker', function() {
    return view('workers/worker');
});

Route::resource('/workers', WorkerController::class);
Route::resource('/workersTemp', WorkerTempController::class);


Route::get('/zone', function() {
    return view('zones/zone');
});

Route::resource('/zones', ZoneController::class);
Route::resource('/zonesTemp', ZoneTempController::class);

Route::get('/running', function() {
    return view('running/startRunning');
});
