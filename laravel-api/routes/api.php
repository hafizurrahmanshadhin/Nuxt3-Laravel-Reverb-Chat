<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', function (Request $request) {
    return  User::whereNot('id', $request->user()->id)->get();
})->middleware('auth:sanctum');

Route::get('/users/{user}', function (User $user) {
    return $user;
})->middleware('auth:sanctum');
