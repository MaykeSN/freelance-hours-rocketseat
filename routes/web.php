<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'project/index')->name('project.index');

Route::view('/project/{project}', 'project.show')->name('project.show');