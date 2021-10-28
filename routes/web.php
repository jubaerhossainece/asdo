<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\VolunteerLoginController;
use App\Http\Controllers\Auth\AdminForgotPasswordController;
use App\Http\Controllers\Auth\AdminResetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\CampaignController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Auth\VolunteerRegisterController;
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
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/alokito-school', [HomeController::class, 'school'])->name('home.school');

//routes for subscribers
Route::post('subscribers', [SubscriberController::class, 'store'])->name('subscribers.store');

//routes for contact message
Route::post('/contacts', [HomeController::class, 'send_message'])->name('contacts.message');

Auth::routes();

//volunteer login and registration pages
Route::get('/volunteerLogin', [VolunteerLoginController::class, 'showLoginForm'])->name('volunteerLogin');
Route::post('/volunteerLogin', [VolunteerLoginController::class, 'login'])->name('volunteerLogin');
Route::get('/volunteerRegister', [VolunteerRegisterController::class, 'showRegisterForm'])->name('volunteerRegister');
Route::post('/volunteerRegister', [VolunteerRegisterController::class, 'register'])->name('volunteerRegister');

//Routes for campaign pages
Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns.index');
Route::get('/campaigns/{id}', [CampaignController::class, 'show'])->name('campaigns.show');

//Routes for projects pages
Route::get('/programs', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/programs/{id}', [ProjectController::class, 'show'])->name('projects.show');

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