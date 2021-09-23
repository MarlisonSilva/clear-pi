<?php

use App\Http\Controllers\web\RunningController;
use App\Http\Controllers\web\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\TruckController;
use App\Http\Controllers\web\WorkerController;
use App\Http\Controllers\web\ZoneController;

// Login e Register

Route::get('/clean', function(){
    return view('layout/clean-template');
});
// Route::get('/login', function () {
//     return view('authentication/login');
// });

Route::get('/register', function () {
    return view('authentication/register');
});

Route::get('/', function () {
    return view('map');
})->name('map');

Route::get('/template', function () {
    return view('layout/template');
})->name('template');


Route::resource('/trucks', TruckController::class);


Route::resource('/workers', WorkerController::class);

Route::resource('/zones', ZoneController::class);

Route::resource('/running', RunningController::class);

Route::resource('/login', LoginController::class);




//  ----- TEMA -----

Route::get('/theme/{rota?}', function ($rota = null) {
    session_start();
    
    if($_SESSION['theme'] == "light"){
        $_SESSION['theme'] = "dark";
    }else{
        $_SESSION['theme'] = "light";
    }

    echo $_SESSION['theme'];

    return redirect()->route($rota);

})->name('theme');



