<?php

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

Route::post('search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('create', [App\Http\Controllers\SearchController::class, 'create'])->name('create');
Route::post('store', [App\Http\Controllers\SearchController::class, 'store'])->name('store');
Route::get('edit/{id}', [App\Http\Controllers\SearchController::class, 'edit'])->name('edit');
Route::post('update/{id}', [App\Http\Controllers\SearchController::class, 'update'])->name('update');