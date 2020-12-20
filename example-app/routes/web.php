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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin-users', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-users');
Route::get('/admin-users-create', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-users-create');
Route::get('/admin-users-edit', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-users-edit');


Route::get('/admin-groups', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-groups');
Route::get('/admin-groups-create', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-groups-create');
Route::get('/admin-groups-edit', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-groups-edit');

Route::get('/admin-subjects', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-subjects');
Route::get('/admin-subjects-create', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-subjects-create');
Route::get('/admin-subjects-edit', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-subjects-edit');


Route::get('/teacher-subjects', [App\Http\Controllers\HomeController::class, 'index1'])->name('teacher-subjects');
Route::get('/teacher-subject-marks', [App\Http\Controllers\HomeController::class, 'index'])->name('teacher-subject-marks');
Route::get('/teacher-events', [App\Http\Controllers\HomeController::class, 'index'])->name('teacher-events');

Route::get('/all-performance', [App\Http\Controllers\HomeController::class, 'index'])->name('all-performance');
Route::get('/subject-performance', [App\Http\Controllers\HomeController::class, 'index'])->name('subject-performance');



Route::middleware('auth')->get('/', function () {
    if(Auth::user()->role_id == 0) {
        return redirect()->route('admin-users');
    }
    if(Auth::user()->role_id == 1) {
        redirect()->route('teacher-subjects');
    }
    if(Auth::user()->role_id == 2) {
        redirect()->route('all-performance');
    }
});
