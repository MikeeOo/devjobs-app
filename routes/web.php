<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
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

Route::get('/', [JobController::class, 'index'])->name('index');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/manage', [JobController::class, 'manage'])->name('jobs.manage');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::post('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::get('/jobs/{job}/delete', [JobController::class, 'delete'])->name('jobs.delete');
});

Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
