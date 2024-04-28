<?php

use App\Http\Controllers\PHPMailerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-email', [PHPMailerController::class, 'index'])->name('send.email');
Route::post('send-email', [PHPMailerController::class, 'store'])->name('send.email.post');
