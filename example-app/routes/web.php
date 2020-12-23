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


Route::resource('/admin-users', App\Http\Controllers\AdminUsersController::class);
Route::resource('/admin-groups', App\Http\Controllers\AdminGroupsController::class);

Route::get('/groups/add/{group}/{user}', [App\Http\Controllers\AdminGroupsController::class, 'addUser'])->name('groups-add-user');
Route::get('/groups/remove/{group}/{user}', [App\Http\Controllers\AdminGroupsController::class, 'removeUser'])->name('groups-remove-user');

Route::get('/subjects/add/{subject}/{event}', [App\Http\Controllers\AdminSubjectsController::class, 'addEvent'])->name('subject-add-event');
Route::get('/subjects/remove/{subject}/{event}', [App\Http\Controllers\AdminSubjectsController::class, 'removeEvent'])->name('subject-remove-event');


Route::resource('/admin-subjects', App\Http\Controllers\AdminSubjectsController::class);
Route::resource('/admin-events', App\Http\Controllers\AdminEventsController::class);


Route::get('/teacher-subjects', [App\Http\Controllers\HomeController::class, 'teacherSubjects'])->name('teacher-subjects');
Route::get('/teacher-subject-marks/{id}', [App\Http\Controllers\HomeController::class, 'teacherSubjectMarks'])->name('teacher-subject-marks');
Route::post('/teacher-subject-marks/{id}', [App\Http\Controllers\HomeController::class, 'teacherSubjectMarksSave'])->name('teacher-subject-marks-save');
Route::get('/teacher-events', [App\Http\Controllers\HomeController::class, 'teacherEvents'])->name('teacher-events');

Route::get('/all-performance', [App\Http\Controllers\HomeController::class, 'allPerformance'])->name('all-performance');
Route::get('/subject-performance/{id}', [App\Http\Controllers\HomeController::class, 'subjectPerformance'])->name('subject-performance');



Route::middleware('auth')->get('', function () {
    if(Auth::user()->role_id == 0) {
        return redirect()->route('admin-users.index');
    }
    if(Auth::user()->role_id == '1') {
        return redirect()->route('teacher-subjects');
    }
    if(Auth::user()->role_id == '2') {
        return redirect()->route('all-performance');
    }
});
Route::middleware('auth')->get('/home', function () {
    if(Auth::user()->role_id == 0) {
        return redirect()->route('admin-users.index');
    }
    if(Auth::user()->role_id == '1') {
        return redirect()->route('teacher-subjects');
    }
    if(Auth::user()->role_id == '2') {
        return redirect()->route('all-performance');
    }
});
