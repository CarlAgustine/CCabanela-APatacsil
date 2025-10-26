<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SectionController;

Route::get('/', [StudentController::class, 'index']); 

Route::resource('students', StudentController::class);
Route::resource('sections', SectionController::class);
