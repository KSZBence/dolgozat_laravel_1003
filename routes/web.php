<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/api/tasks', [TaskController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
