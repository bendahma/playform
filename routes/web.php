<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\UsersTable;

    Route::view('/', 'welcome');

    // Route::view('dashboard', 'dashboard')
    Volt::route('/dashboard', 'admin.dashboard')->name('dashboard');

    /*** Users managements */
    Volt::route('/utilisateurs', 'admin.users.index')->name('admin.users.index');
    Volt::route('/utilisateurs/{user}', 'admin.users.show')->name('admin.users.show');
    Volt::route('/utilisateurs/{user}/edit', 'admin.users.edit')->name('admin.users.edit');
    Volt::route('/utilisateurs/{user}/disable', 'admin.users.disable')->name('admin.users.disable');
    Volt::route('/utilisateurs/{user}/delete', 'admin.users.delete')->name('admin.users.delete');

require __DIR__.'/auth.php';
