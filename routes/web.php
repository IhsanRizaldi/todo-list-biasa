<?php

use App\Http\Controllers\KegiatanController;
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

Route::get('/', [KegiatanController::class,'index'])->name('kegiatan.index');
Route::post('/', [KegiatanController::class,'store'])->name('kegiatan.store');
