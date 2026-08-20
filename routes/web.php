<?php

use App\Http\Controllers\MailController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    $users = User::get();

    return view('users', compact('users'));
});

Route::get("send-email", [MailController::class, 'index']);
