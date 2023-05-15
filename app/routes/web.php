<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Models\People;
//create
Route::get('/opiela/52205/create', function(){
    return view('/create');
});
Route::post('/opiela/52205/create', [MyController::class, 'create']);
//read
Route::get('/opiela/52205/read/{id}', [MyController::class, 'read']);
//update
Route::get('/opiela/52205/edit/{id}','MyController@show');
Route::put('/opiela/52205/edit/{id}','MyController@edit');
//delte
Route::delete('/opiela/52205/delete/{id}','MyController@delete');
//search bar & all data
Route::get('/opiela/52205/', function () {
    if (request('search')) {
        $people = People::where('name', 'like', '%' . request('search') . '%')->get();
    } else {
        $people = People::all();
    }

    return view('index')->with('people', $people);
});