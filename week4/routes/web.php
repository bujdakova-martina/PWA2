<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('courses', App\Http\Controllers\CourseController::class);
    Route::delete('courses/force/{id}', [App\Http\Controllers\CourseController::class, 'forceDestroy'])->name('courses.forceDestroy');
    Route::post('courses/restore/{id}', [App\Http\Controllers\CourseController::class, 'restore'])->name('courses.restore');
    Route::resource('departments', App\Http\Controllers\DepartmentsController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
    
Auth::routes();