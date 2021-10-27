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


//routes for member password change
Route::get('/member/password/edit', [PasswordController::class, 'edit'])->name('member.password.edit');
Route::put('/member/password/change', [PasswordController::class, 'changePassword'])->name('member.password.change');
 

//routes for member photo update
Route::get('/member/photo/edit', [PhotoController::class, 'editPhoto'])->name('member.photo.edit');
Route::put('/member/photo/update', [PhotoController::class, 'updatePhoto'])->name('member.photo.update');

//routes for member's profile management
Route::get('/member/profile', [ProfileController::class, 'show'])->name('member.profile.show');
Route::get('/member/profile/edit', [ProfileController::class, 'edit'])->name('member.profile.edit');
Route::put('/member/profile/update', [ProfileController::class, 'update'])->name('member.profile.update');

//routes for volunteer password change
Route::get('/volunteer/password/edit', [PasswordController::class, 'edit'])->name('volunteer.password.edit');
Route::put('/volunteer/password/change', [PasswordController::class, 'changePassword'])->name('volunteer.password.change');
 

//routes for volunteer photo update
Route::get('/volunteer/photo/edit', [PhotoController::class, 'editPhoto'])->name('volunteer.photo.edit');
Route::put('/volunteer/photo/update', [PhotoController::class, 'updatePhoto'])->name('volunteer.photo.update');

//routes for volunteer's profile management
Route::get('/volunteer/profile', [ProfileController::class, 'show'])->name('volunteer.profile.show');
Route::get('/volunteer/profile/edit', [ProfileController::class, 'edit'])->name('volunteer.profile.edit');
Route::put('/volunteer/profile/update', [ProfileController::class, 'update'])->name('volunteer.profile.update');


// logout routes for user
Route::get('/userLogout', [LoginController::class, 'userLogout'])->name('userLogout'); 
