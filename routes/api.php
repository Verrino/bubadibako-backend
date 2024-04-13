<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\StudentController::class, 'login']);

Route::get('/exams/{classroom_id}', [\App\Http\Controllers\ExamController::class, 'index']);

Route::get('/exam_sessions/{exam_id}', [\App\Http\Controllers\ExamSessionController::class, 'index']);

Route::get('/questions/{exam_id}', [\App\Http\Controllers\QuestionController::class, 'index']);

Route::post('/submit_exam', [\App\Http\Controllers\ExamController::class, 'kumpulUjian']);
