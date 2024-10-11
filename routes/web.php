<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'index'])->name('project.index');

Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');