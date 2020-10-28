<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "auth:sanctum" middleware group. Now create something great!
|
*/

Route::get('/dashboard', 'User\DashboardController@index')->name('dashboard');
