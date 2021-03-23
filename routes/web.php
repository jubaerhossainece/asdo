<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Auth\AdminResetPasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/asdo/login', [AdminLoginController::class, 'showLoginForm'])->name('asdo.login');
Route::post('/asdo/login', [AdminLoginController::class, 'login'])->name('asdo.submit');


// admin reset password routes
Route::get('/asdo/password/reset', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('asdo.password.request');
Route::post('/asdo/password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('asdo.password.email');
Route::get('/asdo/password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('asdo.password.reset');
Route::post('/asdo/password/reset', [AdminResetPasswordController::class, 'reset'])->name('asdo.password.update');