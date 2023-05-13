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

Route::get('/about', function () {
    return \Inertia\Inertia::render('About');
})->name('about');
