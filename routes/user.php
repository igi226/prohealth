<?php

use App\Http\Controllers\User\Index\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\AboutCompany\AboutCompanyController;
use App\Http\Controllers\User\Blog\BlogController;
use App\Http\Controllers\User\Dashboard\UserDashboardController;
use App\Http\Controllers\User\Package\PackageCOntroller;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [UserDashboardController::class, 'profile'])->name('user.profile');
    Route::get('/edit-profile', [UserDashboardController::class, 'editProfile'])->name('user.editProfile');
    Route::post('/edit-updateProfile', [UserDashboardController::class, 'updateProfile'])->name('user.updateProfile');
    Route::get('/buyPlan/{id}', [PackageCOntroller::class, 'buyPlan'])->name('user.buyPlan');
    Route::post('/proceed-to-pay', [PackageCOntroller::class, 'proceedToPay'])->name('user.proceedToPay');
    Route::get('/myPlan', [PackageCOntroller::class, 'myPlan'])->name('user.myPlan');
    Route::get('/take-consultation', [IndexController::class, 'takeConsultation'])->name('user.takeConsultation')->middleware("isSubscriber");
    Route::post('/post-consultation', [IndexController::class, 'postConsultation'])->name('user.postConsultation');
    Route::get('/quiz-section', [AboutCompanyController::class, 'quiz'])->name('user.quiz');
    Route::post('/post-quiz-section', [AboutCompanyController::class, 'quizPost'])->name('user.quizPost');
    

});

require __DIR__.'/auth.php';
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/what-I-do', [AboutCompanyController::class, 'whatIdo'])->name('whatIdo');
Route::get('/who-I-am', [AboutCompanyController::class, 'whoIam'])->name('whoIam');
Route::get('/who-I-can-help', [AboutCompanyController::class, 'whoICanHelp'])->name('whoICanHelp');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('user.blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'viewBlogs'])->name('user.viewBlogs');
Route::get('/packages', [PackageCOntroller::class, 'packages'])->name('user.packages');
Route::post('/submit-query', [IndexController::class, 'submitQuery'])->name('user.submitQuery');
Route::post('/sendNewsletter', [IndexController::class, 'sendNewsletter'])->name('user.sendNewsletter');
Route::get('/about-us', [AboutCompanyController::class, 'aboutUs'])->name('user.aboutUs');
Route::get('/contact-us', [AboutCompanyController::class, 'contactUs'])->name('user.contactUs');
Route::get('/help', [AboutCompanyController::class, 'help'])->name('user.help');
Route::get('/what-is-integrative-functional-care', [AboutCompanyController::class, 'whatIsIntegrative'])->name('user.whatIsIntegrative');
Route::get('/videos', [AboutCompanyController::class, 'videos'])->name('user.videos');
Route::get('/privacy-policy', [AboutCompanyController::class, 'privacyPolicy'])->name('user.privacyPolicy');
Route::get('/lab', [AboutCompanyController::class, 'lab'])->name('user.lab');