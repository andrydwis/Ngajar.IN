<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\DashboardController;
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
    return view('dashboard.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['client'])->group(function () {
        Route::get('/dashboard/mentor-list', [ClientController::class, 'mentorList'])->name('dashboard.mentor-list');
        Route::get('/dashboard/mentor-detail/{user:name}', [ClientController::class, 'mentorDetail'])->name('dashboard.mentor-detail');
    });

    Route::middleware(['mentor'])->group(function () {
        Route::get('/dashboard/schedule', [MentorController::class, 'schedule'])->name('dashboard.schedule');
        Route::post('dashboard/schedule', [MentorController::class, 'addSchedule'])->name('dashboard.add-schedule');
        Route::put('dashboard/schedule/{schedule:id}', [MentorController::class, 'editSchedule'])->name('dashboard.edit-schedule');
        Route::delete('dashboard/schedule/{schedule:id}', [MentorController::class, 'deleteSchedule'])->name('dashboard.delete-schedule');
    });


    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard/profile/edit', [DashboardController::class, 'editProfile'])->name('dashboard.edit.profile');
    Route::get('/dashboard/password/edit', [DashboardController::class, 'editPassword'])->name('dashboard.edit.password');
});
