<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/task', [TaskController::class, 'index']);
//
Route::get('/', [ResourceController::class, 'index']) -> name('products.show');

Route::get('/addproduct', [ResourceController::class, 'ShowCreateForm']) -> name('products.create');
Route::post('/addproduct', [ResourceController::class, 'CreateProduct']) -> name('products.store');
Route::get('/editproduct/{id}', [ResourceController::class, 'ShowEditForm']) -> name('products.edit');
Route::put('/editproduct/{id}', [ResourceController::class, 'EditProduct']) -> name('products.update');
Route::delete('/deleteproduct/{id}', [ResourceController::class, 'DeleteProduct']) -> name('products.destroy');
