<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CommunicationController;


use App\Http\Controllers\CalendarController;

use App\Http\Controllers\PaymentController;

// হোম পেজ রাউট
ivals: Route::get('/', [DashboardController::class, 'home']);

// ব্যাকএন্ড ড্যাশবোর্ড রাউট
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');




// আগের রাউটগুলোর নিচে এটি যোগ করুন
Route::get('/dashboard/academics', [AcademicController::class, 'index'])->name('dashboard.academics');



// আগের রাউটগুলোর নিচে এটি যোগ করুন
Route::get('/dashboard/attendance', [AttendanceController::class, 'index'])->name('dashboard.attendance');





// আগের রাউটগুলোর নিচে এটি যোগ করুন
Route::get('/dashboard/communication', [CommunicationController::class, 'index'])->name('dashboard.communication');





// আগের রাউটগুলোর নিচে এটি যোগ করুন
Route::get('/dashboard/calendar', [CalendarController::class, 'index'])->name('dashboard.calendar');








Route::get('/dashboard/payments', [PaymentController::class, 'index'])->name('dashboard.payments');




Route::get('/dashboard/calendar', [CalendarController::class, 'index'])->name('dashboard.calendar');