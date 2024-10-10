<?php

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;



Route::resources([
    'students' => StudentController::class,
    'grades' => GradeController::class,
    'subjects'=> SubjectController::class
]);

Route::get('/', function () {
    $students=Student::all();
    $subjects=Subject::all();
    $grades=Grade::all();
    return view('dashboard',compact('students','subjects','grades'));
});