<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Portfolio Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'home']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/achievements', [PortfolioController::class, 'achievements']);
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::post('/contact', [PortfolioController::class, 'submitContact']);


/*
|--------------------------------------------------------------------------
| Protected Admin Route (messages page)
|--------------------------------------------------------------------------
*/

Route::get('/messages', [PortfolioController::class, 'messages'])->middleware('auth');


/*
|--------------------------------------------------------------------------
| Dashboard Route (Laravel Breeze default)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Profile Routes (Laravel Breeze default)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Project Admin Routes

    Route::get('/admin/projects', [ProjectController::class, 'index']);

    Route::get('/admin/projects/create', [ProjectController::class, 'create']);

    Route::post('/admin/projects/store', [ProjectController::class, 'store']);

    Route::delete('/admin/projects/delete/{id}', [ProjectController::class, 'destroy']);

    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');

    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');

});


require __DIR__.'/auth.php';