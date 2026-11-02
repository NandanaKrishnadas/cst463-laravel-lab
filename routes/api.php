<?php

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students', function () {
    return response()->json(Student::all());
});
