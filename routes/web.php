<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route for admin dashboard
    Route::get('/dashboard', function () {
        return view('admin/admin-dashboard');
    })->name('dashboard');
});
