<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class);
Route::get('/products', [ProductController::class . 'index']);
    //mostrara todos los productos
   

Route::get('/product/create', [ProductController::class . 'create']);
Route::get('/product/{idProduct}',[ProductController::class . 'show']);

