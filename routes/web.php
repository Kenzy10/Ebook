<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [PerpustakaanController::class,'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login-auth');
Route::get('/login', [PerpustakaanController::class,'login']);
Route::get('/register', [PerpustakaanController::class,'register']);
Route::post('/register', [RegisterController::class,'register']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [PerpustakaanController::class, 'dashboard'])->name('dashboard');
Route::post('/dashboard', [PerpustakaanController::class, 'dashboard'])->name('dashboard');
Route::get('/read', [PerpustakaanController::class,'read']);