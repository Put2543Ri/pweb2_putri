<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('gradient.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/tambah-pesan', [DashboardController::class, 'tambahpesan'])->name('tambahpesan');
Route::post('/insert-pesan', [DashboardController::class, 'insertpesan'])->name('insertpesan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

// Route::get('dashboard', [DashboardController::class,'index'])->middleware(['auth','verified']);

Route::delete('/dashboard/{NO}', [DashboardController::class,'delete'])->middleware(['auth','verified']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
require __DIR__.'/auth.php';
