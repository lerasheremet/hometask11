<?php

use Illuminate\Support\Facades\Route;
use iluminate\Http\Request;

Route::get('/',
    [\App\Http\Controllers\HomeController::class, 'index']
)->name('home');

Route::get('/contacts',
    [\App\Http\Controllers\ContactsController::class, 'index']
)->name('contacts');
