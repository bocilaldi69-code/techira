<?php

//adminuse App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;



//frontend
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/index', [FrontendController::class, 'index']);
Route::post('/contact', [FrontendController::class, 'sendMessage'])->name('contact.send');



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// ===== ADMIN =====
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Services
    Route::resource('services', ServiceController::class);

    // Portfolio
    Route::resource('portfolios', PortfolioController::class);

    // Team
    Route::resource('teams', TeamController::class);

    // Messages (hanya index dan destroy)
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');

    // Company Profile
    Route::get('company/edit', [CompanyProfileController::class, 'edit'])->name('company.edit');
    Route::put('company/update', [CompanyProfileController::class, 'update'])->name('company.update');
});
