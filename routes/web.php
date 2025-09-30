<?php

use Illuminate\Support\Facades\Route;

Route::get('/view', function () {
    return view('welcome');
});

Route::get('/', function () {
    return ['message' => 'Welcome to Padel LLM API'];
});