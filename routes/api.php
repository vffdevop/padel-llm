<?php

use Illuminate\Support\Facades\Route;

use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Api\Taskcontroler;

Route::apiResource('tasks', Taskcontroler::class);

Route::get('/health', function () {
            return response()->json([
            'success' => true,
            'message' => 'Health OK'
        ],Response::HTTP_OK);
});

Route::put('/test', function() {
    return response()->json(['ok' => true]);
});
