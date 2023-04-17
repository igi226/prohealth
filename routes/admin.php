<?php

use App\Http\Controllers\Admin\Appoinments\AppoinmentController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Cms\CmsController;
use App\Http\Controllers\Admin\Consultation\ConsultationController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Package\PackageController;
use App\Http\Controllers\Admin\Quiz\QuizController;
use App\Http\Controllers\Admin\Testimonial\TestimonialController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin.loggedin');
Route::get('/forgot-password', [AuthController::class, 'forgotPasword'])->name('admin.forgotPasword');
Route::post('/get-password-mail', [AuthController::class, 'getPaswordMail'])->name('admin.getPaswordMail');

Route::group(['middleware' => ["admin"]], function () {
    //profile
    Route::get('admin-profile', [DashboardController::class, 'adminProfile'])->name('admin.adminProfile');
    Route::post('admin-profile', [DashboardController::class, 'adminProfileUpdate'])->name('admin.profile');
    Route::get('admin-change-password', [DashboardController::class, 'adminChangePassword'])->name('admin.adminChangePassword');
    Route::post('admin-password', [DashboardController::class, 'changePassword'])->name('admin.changePassword');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('siteSettings', [DashboardController::class, 'siteSettings'])->name('admin.siteSettings');
    Route::post('siteSettings', [DashboardController::class, 'siteSettingsupdate'])->name('admin.siteSettingsupdate');
    Route::resource('users' , UserController::class);
    Route::get('user/changeS', [UserController::class, 'changeS']);
    Route::resource('cms' , CmsController::class);
    Route::get('videos' , [CmsController::class, 'videos'])->name('videos');
    Route::get('videos/create' , [CmsController::class, 'videosCreate'])->name('videosCreate');
    Route::post('videos/create' , [CmsController::class, 'videosStore'])->name('videosStore');
    Route::get('videos/edit/{id}' , [CmsController::class, 'videosEdit'])->name('videosEdit');
    Route::post('videos/edit/{id}' , [CmsController::class, 'videosUpdate'])->name('videosUpdate');
    Route::delete('videosDelete/{id}', [CmsController::class, 'videosDelete'])->name("videosDelete");
    
    Route::resource('blogs' , BlogController::class);
    Route::resource('packages' , PackageController::class);
    Route::resource('testimonials' , TestimonialController::class);
    Route::resource('consultations' , ConsultationController::class);
    Route::resource('appointments' , AppoinmentController::class);
    Route::get('appointments/changeS', [AppoinmentController::class, 'changeAS']);
    Route::get('queries', [DashboardController::class, 'queries'])->name("admin.queries");
    Route::get('queries/{id}', [DashboardController::class, 'queriesView'])->name("admin.queriesView");
    Route::delete('queries/{id}', [DashboardController::class, 'queriesDelete'])->name("admin.queriesDelete");
    Route::resource('quizzes' , QuizController::class);
    
    
    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

});