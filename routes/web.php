<?php

use App\Http\Controllers\BebrasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('say-hello/{color}', [BebrasController::class, 'hello']);
Route::get('minus/{one}/{two}', [BebrasController::class, 'atimti']);