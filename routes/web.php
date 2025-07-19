<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', DashboardIndex::class)->name('dashboard.index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
});
