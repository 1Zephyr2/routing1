<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'show']);

Route::resource('tasks', TaskController::class);

Route::post('/tasks', [TaskController::class, 'store']);

Route::get('/tasks/create', function () {
    return view('taskTemplate');
});