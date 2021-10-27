<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\VolunteerController;
use App\Http\Controllers\Backend\BloodDonorController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminPasswordController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AdminPhotoController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CampaignController;
use App\Http\Controllers\Backend\CampaignFileController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ProjectFileController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\InboxController;

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


// Routes for contacts
Route::resource('/contacts', ContactController::class);

//email manipulation
Route::post('/mark/read', [InboxController::class, 'read'])->name('mark.read');
Route::post('/mark/unread', [InboxController::class, 'unread'])->name('mark.unread');
Route::post('/mark/important', [InboxController::class, 'important'])->name('mark.important');
Route::post('/mark/unimportant', [InboxController::class, 'unImportant'])->name('mark.unimportant');
Route::get('/important', [InboxController::class, 'important_message'])->name('important.index');
Route::get('/important/show/{id}', [InboxController::class, 'important_message_show'])->name('important.show');
Route::get('/trashed', [InboxController::class, 'trashed_message'])->name('trashed.index');
Route::get('/trashed/show/{id}', [InboxController::class, 'trashed_message_show'])->name('trashed.show');
Route::post('/delete/permanent', [InboxController::class, 'permanent_delete'])->name('delete.permanent');
Route::post('/trash/restore/', [InboxController::class, 'restore_trash'])->name('trash.restore');

// routes for admin management
Route::resource('/admins', AdminController::class);

// routes for member management
Route::resource('/members', UserController::Class);

// routes for volunteer management
Route::resource('/volunteers', VolunteerController::Class);

// routes for rblood donor management
Route::resource('/bloodDonors', BloodDonorController::class);

// routes for role management
Route::resource('/roles', RoleController::class);

//admin profile routes
Route::get('/profile', [AdminProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [AdminProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [AdminProfileController::class, 'update'])->name('profile.update');


//routes password change for admin
Route::get('/password/edit', [AdminPasswordController::class, 'edit'])->name('password.edit');
Route::put('/password/change', [AdminPasswordController::class, 'changePassword'])->name('password.change');

//routes for admin photo update
Route::get('/photo/edit', [AdminPhotoController::class, 'editPhoto'])->name('photo.edit');
Route::put('/photo/update', [AdminPhotoController::class, 'updatePhoto'])->name('photo.update');


//logout routes for admin panel
Route::get('/adminLogout', [AdminLoginController::class, 'adminLogout'])->name('adminLogout');

//slider images routes
Route::resource('sliders', SliderController::class);

//Rotes for campaign
Route::resource('campaigns', CampaignController::class);

//Rotes for project
Route::resource('projects', ProjectController::class);

//routes for project images
Route::get('/image/projects/{id}', [ProjectFileController::class, 'show'])->name('image.projects.show');
Route::post('/image/projects', [ProjectFileController::class, 'store'])->name('image.projects.store');
Route::get('/image/projects/{id}/fetch', [ProjectFileController::class, 'fetch'])->name('image.projects.fetch');
Route::get('/image/projects/{id}/delete', [ProjectFileController::class, 'destroy'])->name('image.projects.destroy');

//routes for campaign images
Route::get('/image/campaigns/{id}', [CampaignFileController::class, 'show'])->name('image.campaigns.show');
Route::post('/image/campaigns', [CampaignFileController::class, 'store'])->name('image.campaigns.store');
Route::get('/image/campaigns/{id}/fetch', [CampaignFileController::class, 'fetch'])->name('image.campaigns.fetch');
Route::get('/image/campaigns/{id}/delete', [CampaignFileController::class, 'destroy'])->name('image.campaigns.destroy');
