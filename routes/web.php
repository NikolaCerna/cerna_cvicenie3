<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/example/create');

Route::get('/profile/create', [ProfileController::class, 'showForm']);
Route::post('/profile/result', [ProfileController::class, 'processForm']);

Route::get('/example/create', [ExampleController::class, 'showForm']);
Route::post('/example/result', [ExampleController::class, 'processForm']);
