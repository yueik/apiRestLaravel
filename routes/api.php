<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

//Version 1
Route::apiResource('v1/posts', PostV1::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

//Version 2
Route::apiResource('v2/posts', PostV2::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

//Login
Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
