<?php

use App\Http\Controllers\BebrasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UztvunkaController;
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
Auth::routes();
Route::get('/uztvunka', [UztvunkaController::class, 'index'])->name('uztvunka-index');
Route::get('uztvunka/edit/{uztvunka}', [UztvunkaController::class, 'edit'])->name('uztvunka-edit');
Route::get('uztvunka/create', [UztvunkaController::class, 'create'])->name('uztvunka-create');
Route::post('uztvunka/store', [UztvunkaController::class, 'store'])->name('uztvunka-store');
Route::post('uztvunka/update/{uztvunka}', [UztvunkaController::class, 'update'])->name('uztvunka-save');
Route::post('uztvunka/delete/{uztvunka}', [UztvunkaController::class, 'destroy'])->name('uztvunka-delete');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
