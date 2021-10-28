<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\VolunteerController;
use App\Http\Controllers\Auth\VolunteerLoginController;
use App\Http\Controllers\User\VolunteerPasswordController;
use App\Http\Controllers\User\VolunteerPhotoController;

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

//routes for volunteer password change
Route::get('/password/edit', [VolunteerPasswordController::class, 'edit'])->name('password.edit');
Route::put('/password/change', [VolunteerPasswordController::class, 'changePassword'])->name('password.change');
 

//routes for volunteer photo update
Route::get('/photo/edit', [VolunteerPhotoController::class, 'edit'])->name('photo.edit');
Route::put('/photo/update', [VolunteerPhotoController::class, 'update'])->name('photo.update');

//routes for volunteer's profile management
Route::get('/profile', [VolunteerController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [VolunteerController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [VolunteerController::class, 'update'])->name('profile.update');

Route::get('/logout', [VolunteerLoginController::class, 'logout'])->name('logout');

