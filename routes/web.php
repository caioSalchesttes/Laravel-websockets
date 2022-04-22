<?php

use App\Http\Controllers\MensagemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/', [MensagemController::class, 'index'])->name('home');
});
