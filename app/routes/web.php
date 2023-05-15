<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', [MyController::class, 'index']);
Route::get('/create', function(){
    return view('/create');
});
Route::post('/create', [MyController::class, 'create']);
Route::get('/read/{id}', [MyController::class, 'read']);
Route::get('/destroy/{id}', [MyController::class, 'destroy']);
//ponizej update
Route::get('/edit/{id}','MyController@show');
Route::post('/edit/{id}','MyController@edit');