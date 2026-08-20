<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function () {
    User::create([
        "name" => "Test",
        "email" => "test2@gmail.com",
        "password" => "123456",
    ]);

    dd(User::get()->toArray());
});
