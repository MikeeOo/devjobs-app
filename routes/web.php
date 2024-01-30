<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
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

Route::get('/', [ListingController::class, 'index'])->name('index');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/attempt', [AuthController::class, 'attempt'])->name('attempt');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/jobs/create', [ListingController::class, 'create'])->name('jobs.create');
    Route::post('/jobs/store', [ListingController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/manage', [ListingController::class, 'manage'])->name('jobs.manage');
    Route::get('/jobs/{job}/edit', [ListingController::class, 'edit'])->name('jobs.edit');
    Route::post('/jobs/{job}', [ListingController::class, 'update'])->name('jobs.update');
    Route::get('/jobs/{job}/delete', [ListingController::class, 'delete'])->name('jobs.delete');
});

Route::get('/jobs/{job}', [ListingController::class, 'show'])->name('jobs.show');
