<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {

});

Route::get('/', function () {
    return \Inertia\Inertia::render('Home');
})->name('home');

Route::resource('faculty', \App\Http\Controllers\FacultyController::class);
Route::resource('study-group', \App\Http\Controllers\StudyGroupController::class);
Route::resource('contract', \App\Http\Controllers\ContractController::class);
Route::resource('direction', \App\Http\Controllers\DirectionController::class);
Route::resource('organization', \App\Http\Controllers\OrganizationController::class);
Route::resource('practical-training', \App\Http\Controllers\PracticalTrainingController::class);
Route::resource('practice', \App\Http\Controllers\PracticeController::class);
Route::resource('practice-documents', \App\Http\Controllers\PracticeDocumentsController::class);
Route::resource('profile', \App\Http\Controllers\ProfileController::class);
Route::resource('reporting-documents', \App\Http\Controllers\ReportingDocumentsController::class);
Route::resource('student', \App\Http\Controllers\StudentController::class);
Route::resource('teacher', \App\Http\Controllers\TeacherController::class);
Route::resource('department', \App\Http\Controllers\DepartmentController::class);

