<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\JurusanController;

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

Route::resource('register', RegisterController::class);
Route::resource('jurusan', JurusanController::class);
Route::get('register/hapus/{id}',[RegisterController::class,'destroy']);
Route::get('jurusan/hapus/{id}',[JurusanController::class,'destroy']);
    