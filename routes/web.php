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

    Route::get('/jobs/create', [ListingController::class, 'create'])->name('listings.create');
    Route::post('/jobs/store', [ListingController::class, 'store'])->name('listings.store');
    Route::get('/jobs/manage', [ListingController::class, 'manage'])->name('listings.manage');
    Route::get('/jobs/{listing}/edit', [ListingController::class, 'edit'])->name('listings.edit');
    Route::post('/jobs/{listing}', [ListingController::class, 'update'])->name('listings.update');
    Route::get('/jobs/{job}/delete', [ListingController::class, 'delete'])->name('jobs.delete');
});

Route::get('/jobs/{listing}', [ListingController::class, 'show'])->name('listings.show');
