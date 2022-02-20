<?php

use App\Http\Controllers\Api\{
    CourseControler
};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseControler::class, 'index']);
Route::get('/courses/{id}', [CourseControler::class, 'show']);

Route::get('/', function () { 
    return response()->json([
        'success' => true,
    ]);
});
