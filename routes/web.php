<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ComponentDemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/components-demo', [ComponentDemoController::class, 'index']);
