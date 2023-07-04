<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
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
    return view('home');
});

Route::get('/', [FormController::class, 'index'])->name('home');
Route::post('/', [FormController::class, 'create'])->name('create');



Route::get('/beranda', function () {
    return view('beranda');
})->middleware(['auth', 'verified'])->name('beranda');

Route::middleware('auth')->group(function () {
    Route::get('/beranda', [AdminController::class, 'beranda'])->name('beranda');
    Route::get('/entri-data', [AdminController::class, 'entri'])->name('entri'); 
    Route::get('/entri-data/{id}/detail', [AdminController::class, 'detail']);
    Route::post('/entri-data/{id}/update', [AdminController::class, 'update']);
    Route::delete('/entri-data/{id}/delete', [AdminController::class, 'delete']);
    Route::get('/check-ticket', [AdminController::class, 'showCheckForm'])->name('check');
    Route::post('/check-ticket', [AdminController::class, 'check'])->name('check-post');
    Route::post('/check-ticket/{id}', [AdminController::class, 'validasi']);
    Route::get('/validasi', [AdminController::class, 'chekin'])->name('chekin');
});

require __DIR__.'/auth.php';
