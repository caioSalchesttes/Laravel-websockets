<?php

use App\Http\Controllers\MensagemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/show',[MensagemController::class,'show']);
Route::post('/send',[MensagemController::class,'send']);
