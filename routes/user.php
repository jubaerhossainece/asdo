<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PasswordController;
use App\Http\Controllers\User\PhotoController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Auth\LoginController;

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


//routes password change
Route::get('/password/edit', [PasswordController::class, 'edit'])->name('password.edit');
Route::put('/password/change', [PasswordController::class, 'changePassword'])->name('password.change');
 

//routes for user photo update
Route::get('/photo/edit', [PhotoController::class, 'editPhoto'])->name('photo.edit');
Route::put('/photo/update', [PhotoController::class, 'updatePhoto'])->name('photo.update');

//routes for user's profile management
Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// logout routes for user
Route::get('/userLogout', [LoginController::class, 'userLogout'])->name('userLogout'); 
