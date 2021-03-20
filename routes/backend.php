<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminPasswordController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AdminPhotoController;
use App\Http\Controllers\Auth\AdminLoginController;

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

//admin profile routes
Route::get('/profile', [AdminProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [AdminProfileController::class, 'edit'])->name('profile.edit');
Route::get('/profile/update', [AdminProfileController::class, 'update'])->name('profile.update');


//routes password change for admin
Route::get('/password/edit', [AdminPasswordController::class, 'edit'])->name('password.edit');
Route::put('/password/update', [AdminPasswordController::class, 'update'])->name('password.update');

//routes for admin photo update
Route::get('/photo/edit', [AdminPhotoController::class, 'editPhoto'])->name('photo.edit');
Route::put('/photo/update', [AdminPhotoController::class, 'updatePhoto'])->name('photo.update');


// logout routes for admin panel
Route::get('/adminLogout', [AdminLoginController::class, 'adminLogout'])->name('adminLogout');