<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatewayController;
use App\Http\Controllers\Auth\RegisterController;

/* 
Dibawah ini merupakan sebuah route yang akan menuju ke route api mikroservis tiap modul
Routes api gateway akan dibuat disini untuk kebutuhan client 
Routes api ini belum dilengkapi dengan autentikasi 
*/

// Daftar list API di api gateway
Route::get('/api-gateway/marketing', [GatewayController::class, 'postProduct']);
Route::post('/api-gateway/marketing', [GatewayController::class, 'insertProduct']);
Route::get('/api-gateway/sales', [GatewayController::class, 'sales']);