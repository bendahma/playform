<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
Volt::route('/dashboard', 'admin.dashboard')->name('dashboard');

/*** Users managements */
Volt::route('/utilisateurs', 'admin.users.index')->name('admin.users.index');

require __DIR__.'/auth.php';
