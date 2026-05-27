<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

// Esta línea mágica genera las 7 rutas del CRUD de golpe de forma automática
Route::resource('product', ProductController::class);
