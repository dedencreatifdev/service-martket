<?php

use App\Livewire\Admin\Dashboard\DashboardIndex;
use App\Livewire\Admin\Produk\ProdukIndex;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', DashboardIndex::class)->name('admin.dashboard.index');

    Route::get('users/{id}', ProdukIndex::class)->name('admin.produk.index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', Login::class)->name('login');
});
