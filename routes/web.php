<?php

use App\Http\Controllers\NotaController;
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


Route::get('/', [NotaController::class, 'index'])->name('nota.index');
Route::post('/store/nota', [NotaController::class, 'store'])->name('nota.store');
Route::get('/show/{nota}', [NotaController::class, 'show'])->name('nota.show');
Route::put('/update/{nota}', [NotaController::class, 'update'])->name('nota.update');
Route::delete('/delete/{nota}', [NotaController::class, 'destroy'])->name('nota.destroy');
