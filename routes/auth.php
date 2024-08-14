<?php

use App\Http\Controllers\Auth\{Admin, Teacher};
use Illuminate\Support\Facades\Route;
Route::middleware('guest')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('login', [Admin\AdminAuthenticatedSessionController::class, 'create'])->name('admin.login');
        Route::post('login', [Admin\AdminAuthenticatedSessionController::class, 'store'])->name('admin.post.login');
        Route::get('forgot/password', [Admin\AdminAuthenticatedSessionController::class, 'forgot_password'])->name('admin.forgot.password');
        Route::post('forgot/password', [Admin\AdminAuthenticatedSessionController::class, 'forgot_password_post'])->name('admin.post.forgot.password');
        Route::get('reset/password/{token}', [Admin\AdminAuthenticatedSessionController::class, 'reset_password'])->name('admin.reset.password');
        Route::post('reset/password/{token}', [Admin\AdminAuthenticatedSessionController::class, 'do_reset_password'])->name('admin.do.reset.password');
    });

    /*Route::prefix('teacher')->group(function () {
        Route::get('login', [Teacher\TeacherAuthenticatedSessionController::class, 'create'])->name('teacher.login');
        Route::post('login', [Teacher\TeacherAuthenticatedSessionController::class, 'store'])->name('teacher.post.login');
        Route::get('forgot/password', [Teacher\TeacherAuthenticatedSessionController::class, 'forgot_password'])->name('teacher.forgot.password');
        Route::post('forgot/password', [Teacher\TeacherAuthenticatedSessionController::class, 'forgot_password_post'])->name('teacher.post.forgot.password');
        Route::get('reset/password/{token}', [Teacher\TeacherAuthenticatedSessionController::class, 'reset_password'])->name('teacher.reset.password');
        Route::post('reset/password/{token}', [Teacher\TeacherAuthenticatedSessionController::class, 'do_reset_password'])->name('admin.do.reset.password');
    });*/
});

Route::middleware('auth:admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('logout', [Admin\AdminAuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
    });
});

