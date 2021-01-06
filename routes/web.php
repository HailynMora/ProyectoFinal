<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProductosController;

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

Route::get('/', [InicioController::class, 'getIndex']);
Route::get('/login', [InicioController::class, 'login']);
Route::get('productos/anchetas', [ProductosController::class, 'anchetas']);
Route::get('productos/buscar',[ProductosController::class, 'buscarProd'])->name('busprod');