<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', [TaskController::class, 'index']);
//
Route::get('/product', [ResourceController::class, 'index']);
Route::get('/addproduct', function () {
    return view('createproduct'); 
});
Route::post('/addproduct', [ResourceController::class, 'CreateProduct']);
Route::get('/editproduct/{id}', [ResourceController::class, 'ShowEditForm']);
Route::put('/editproduct/{id}', [ResourceController::class, 'EditProduct']);
Route::delete('/deleteproduct/{id}', [ResourceController::class, 'DeleteProduct']);
