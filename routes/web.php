<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
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

Route::middleware(['guest'])->group(function() {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function() {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/user', [AdminController::class, 'user']);
    Route::post('/logout', [SesiController::class, 'logout'])->name('logout'); // Use POST for logout
});
