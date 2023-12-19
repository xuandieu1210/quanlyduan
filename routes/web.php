<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SoctoolController;
use App\Http\Controllers\DuanController;
use App\Http\Controllers\KehoachController;
use App\Http\Controllers\HoadonController;
use App\Http\Controllers\ThanhtoanController;

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

Route::get('/', [KehoachController::class, 'index']);

Route::resource('soctool', SoctoolController::class);
Route::resource('duan', DuanController::class);
Route::resource('hoadon', HoadonController::class);
Route::resource('thanhtoan', ThanhtoanController::class);
Route::post('/ajax', [DuanController::class, 'ajax'])->name('ajax');;