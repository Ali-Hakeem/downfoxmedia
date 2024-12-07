<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebController;
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

Route::get('/', [AppController::class, 'index']);
Route::get('/article', [AppController::class, 'article']);
Route::get('/gigs', [AppController::class, 'gigs']);
Route::get('/interview', [AppController::class, 'interview']);
Route::get('/features', [AppController::class, 'features']);
Route::get('/search',[AppController::class, 'search']);
Route::get('/article/{slug}', [Appcontroller::class, 'detail'] );
Route::get('/contact', [AppController::class, 'contact']);

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('dashboard/post', [WebController::class, 'index'])->name('post.index');
Route::get('dashboard/post/create', [WebController::class, 'create'])->name('post.create');
Route::post('dashboard/post/store', [WebController::class, 'store'])->name('post.store');
Route::get('products/edit/{id}', [WebController::class, 'edit'])->name('post.edit');
Route::put('products/update/{id}', [WebController::class, 'update'])->name('post.update');
Route::delete('dashboard/post/{id}', [WebController::class, 'destroy'])->name('post.destroy');
Route::get('/dashboard/player/search',[WebController::class, 'search']);