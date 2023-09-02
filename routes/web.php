<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Livewire\ProjectsData;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

    Route::get('/projects', ProjectsData::class)->name('projects');
    Route::get('/users', ProjectsData::class)->name('users');

    // Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('show');

    // Route::get('/users', [ProjectController::class, 'index'])->name('users');

    // Route::get('/projects', ProjectCrud::class);

    // Route::resource('/projects', ProjectController::class);
    Route::post('/data', [DataController::class, 'create']);
});
