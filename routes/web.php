<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\VolunteerLoginController;
use App\Http\Controllers\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Auth\AdminResetPasswordController;
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

//rouytes for frontend pages
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/projects', function () {
    return view('frontend.about');
});

Auth::routes();

//volunteer login and registration pages
Route::get('volunteer/login', [VolunteerLoginController::class, 'showLoginForm'])->name('volunteer.login');
Route::get('volunteer/register', [VolunteerLoginController::class, 'showRegisterForm'])->name('volunteer.register');


// social login routes
Route::get('/login/{provider}', [LoginController::class, 'redirectToProvider'])->name('login.provider');
Route::get('/login/{provider}/callback', [LoginController::class, 'handleProviderCallback'])->name('login.callback');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/asdo/login', [AdminLoginController::class, 'showLoginForm'])->name('asdo.login');
Route::post('/asdo/login', [AdminLoginController::class, 'login'])->name('asdo.submit');


// admin reset password routes
Route::get('/asdo/password/reset', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('asdo.password.request');
Route::post('/asdo/password/email', [AdminForgotPasswordController::class, 'sendResetLinkEmail'])->name('asdo.password.email');
Route::get('/asdo/password/reset/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('asdo.password.reset');
Route::post('/asdo/password/reset', [AdminResetPasswordController::class, 'reset'])->name('asdo.password.update');