<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::resource('/students','App\http\Controllers\StudentController')->except(['create','edit']);
    Route::resource('/course','App\http\Controllers\CourseController')->except(['create','edit']);
    Route::resource('/studentcourse','App\http\Controllers\StudentCourseController')->except(['create','edit']);