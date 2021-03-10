<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes for dashboard
Route::get('/dashboard', DashboardController::class)->name('dashboard');

// routes for user management
Route::resource('/users', UserController::Class);

// routes for role management
Route::resource('/roles', RoleController::class);

// routes for admin management
Route::resource('/admins', AdminController::class);

