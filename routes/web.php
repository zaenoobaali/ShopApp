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
Route::post('/product', [ResourceController::class, 'CreateProduct']);
Route::post('/editproduct/{$id}', [ResourceController::class, 'EditProduct']);
Route::delete('/product/{$id}', [ResourceController::class, 'DeleteProduct']);
