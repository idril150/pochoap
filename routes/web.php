<?php

use App\Http\Controllers\GustoController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', HomeController::class);

Route::controller(GustoController::class)->group(function(){
    Route::get('gustos', 'index');
    Route::get('gustos/create', 'create');
    Route::get('gustos/{gusto}', 'show');
});



