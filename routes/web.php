<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;  
Route::get('/', function () {
    return view('welcome');
});

// Register the middleware directly in the route (class-based middleware)
Route::get('/admin-dashboard', function () {
    return "WELCOME ADMIN!.";
})->middleware(CheckRole::class . ':admin');
