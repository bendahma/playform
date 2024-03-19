<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
Volt::route('/dashboard', 'admin.dashboard')->name('dashboard');
require __DIR__.'/auth.php';
