<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

// Registramos de golpe los 5 métodos CRUD de la API
Route::apiResource('product', ProductController::class);
