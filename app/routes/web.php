<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', [MyController::class, 'index']);
Route::get('/create', [MyController::class, 'create']);
Route::get('/read/{id}', [MyController::class, 'read']);
Route::get('/update', [MyController::class, 'update']);
Route::get('/delete', [MyController::class, 'delete']);

