<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\UsersTable;

Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
Volt::route('/dashboard', 'admin.dashboard')->name('dashboard');

/*** Users managements */
Volt::route('/utilisateurs', 'admin.users.index')->name('admin.users.index');

Route::get('/users',UsersTable::class);

require __DIR__.'/auth.php';
