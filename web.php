<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'index']);
Route::post('/test', [TestController::class, 'post']);
Route::get('/add', [TestController::class, 'add']);
Route::post('/add', [TestController::class, 'create']);
