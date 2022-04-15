<?php

use App\Http\Controllers\MensagemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MensagemController::class,'index'])->name('home');
