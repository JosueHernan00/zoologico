<?php

use App\Http\Controllers\JosueController;
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

Route::controller(AskaryController::class)->group(function(){
    Route::get('/zoo', 'pricipal');
    Route::get('/zoo/perro', 'perro');
    Route::get('/zoo/chivo', 'chivo');
    Route::get('/zoo/raton','raton');
});

