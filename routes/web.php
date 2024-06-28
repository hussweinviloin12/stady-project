<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\CostController;

Route::get('/costs', [CostController::class, 'index'])->name('costs.index');
Route::get('/costs/create', [CostController::class, 'create'])->name('costs.create');
Route::post('/costs', [CostController::class, 'store'])->name('costs.store');
Route::get('/costs/{id}', [CostController::class, 'show'])->name('costs.show');
Route::get('/costs/{id}/edit', [CostController::class, 'edit'])->name('costs.edit');
Route::put('/costs/{id}', [CostController::class, 'update'])->name('costs.update');
Route::delete('/costs/{id}', [CostController::class, 'destroy'])->name('costs.destroy');

use App\Http\Controllers\ProjectDataController;

Route::get('/projects', [ProjectDataController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectDataController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectDataController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}', [ProjectDataController::class, 'show'])->name('projects.show');
Route::get('/projects/{id}/edit', [ProjectDataController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{id}', [ProjectDataController::class, 'update'])->name('projects.update');
Route::delete('/projects/{id}', [ProjectDataController::class, 'destroy'])->name('projects.destroy');

require __DIR__.'/auth.php';
