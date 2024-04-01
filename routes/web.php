<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
    UserController,
};

use Livewire\Volt\Volt;
use App\Livewire\UsersTable;

    Route::view('/', 'welcome');

    // Route::view('dashboard', 'dashboard')
    Volt::route('/dashboard', 'admin.dashboard')->name('dashboard');

    /*** Users managements */
    Volt::route('/utilisateurs', 'admin.users.index')->name('admin.users.index');
    Volt::route('/utilisateurs/create', 'admin.users.create')->name('admin.users.create');
    Volt::route('/utilisateurs/{user}', 'admin.users.show')->name('admin.users.show');
    Volt::route('/utilisateurs/{user}/edit', 'admin.users.edit')->name('admin.users.edit');
    Volt::route('/utilisateurs/{user}/disable', 'admin.users.disable')->name('admin.users.disable');
    // Volt::route('/utilisateurs/{user}/delete', 'admin.users.delete')->name('admin.users.delete');

    Route::delete('/utilisateurs/{user}/delete', [UserController::class,'destroy'])->name('admin.users.delete');

require __DIR__.'/auth.php';
