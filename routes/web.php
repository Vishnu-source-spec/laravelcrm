<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['account'], function () {

    //guest login
    Route::group(['middleware' => 'guest'], function () {

        Route::get('/account/register', [AccountController::class, 'register'])->name('account.registeration');
        Route::post('/account/process-register', [AccountController::class, 'processRegisteration'])->name('account.processRegsiteration');

        Route::get('/account/login', [AccountController::class, 'login'])->name('account.login');
        Route::post('/account/login', [AccountController::class, 'authenticate'])->name('account.authenticate');
    });

    //Authenticated
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/account/dashboard', [HomeController::class, 'index'])->name('account.dashboard');
        
        Route::get('/account/helpdesk/dashboard', [HelpdeskController::class, 'dashboard'])->name('account.helpdesk.dashboard');

        
    });
});
