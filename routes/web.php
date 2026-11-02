<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('home');
});

Route::get('/hello/{your_name}', function ($your_name) {
    return 'Hello, ' . $your_name;
});

Route::get('/about', [AboutController::class, 'index']);

Route::resource('students', StudentController::class);

Route::get('/roll/{your_roll}', function (Student $your_roll) {
    return view('students.show', ['student' => $your_roll]);
});