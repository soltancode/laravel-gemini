<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;

Route::get('/', function () {
    return view('gemini');
});

Route::post('/', [GeminiController:: class, 'askQuestion']);
