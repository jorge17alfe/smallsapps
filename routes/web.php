<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('example', 'example')
    ->middleware(['auth'])
    ->name('example');

Route::get('example', function () {
    return view("example");
})  ->middleware(['auth'])
    ->name('example');



require __DIR__ . '/auth.php';
