<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard/dashboard-v1', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard-v1');
Route::get('/dashboard/dashboard-v2', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard-v2');
Route::get('/dashboard/dashboard-v3', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard-v3');

