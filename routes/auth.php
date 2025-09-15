<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
  return view('auth.login');
})->name('login');

Route::post('/login', function () {
  // Handle login logic
})->name('login.store');

Route::post('/logout', function () {
  // Handle logout logic
})->name('logout');

Route::get('/register', function () {
  return view('auth.register');
})->name('register');

Route::post('/register', function () {
  // Handle registration logic
})->name('register.store');
