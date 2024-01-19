<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\UserController;
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
    return view('landing');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [UserController::class, 'search'])->name('dashboard.search');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard-detail/{shoe}', [UserController::class, 'show'])->name('user.show');
});


Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');

Route::get('/table', [ShoeController::class, 'create'])->name('table');
Route::post('/table', [ShoeController::class, 'store'])->name('table-store');

Route::get('/admin/{shoe}/edit', [AdminController::class, 'edit'])->name('table-edit');
Route::put('/admin/{shoe}/update', [AdminController::class, 'update'])->name('table-update');

Route::delete('/admin/{user}/destroy', [AdminController::class, 'destroy'])->name('table-destroy');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function() {
});

require __DIR__.'/auth.php';
