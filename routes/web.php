<?php

use App\Http\Controllers\SiteController;
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


Route::get('/', [SiteController::class, 'index']);
Route::get('/users/create', [SiteController::class, 'create']);
Route::post('/users/create', [SiteController::class, 'store'])->name('users.create');
Route::get('/users/{user}/show', [SiteController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [SiteController::class, 'edit']);
Route::put('/users/{user}/edit', [SiteController::class, 'update'])->name('users.edit');
Route::get('/users/{user}/delete', [SiteController::class, 'delete']);
Route::delete('/users/{user}/delete', [SiteController::class, 'destroy'])->name('users.delete');
