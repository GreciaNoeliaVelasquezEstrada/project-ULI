<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MatterController;
use App\Http\Controllers\Admin\EvaluationController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\ActivitieController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\AssistanceController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('courses', CourseController::class)->names('admin.courses');
Route::resource('grades', GradeController::class)->names('admin.grades');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('matters', MatterController::class)->names('admin.matters');
Route::resource('evaluations', EvaluationController::class)->names('admin.evaluations');
Route::resource('students', StudentController::class)->names('admin.students');
Route::resource('teachers', TeacherController::class)->names('admin.teachers');
Route::resource('activities', ActivitieController::class)->names('admin.activities');
Route::resource('subjects', SubjectController::class)->names('admin.subjects');
Route::resource('assistances', AssistanceController::class)->names('admin.assistances');