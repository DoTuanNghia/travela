<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\ServicesController;
use App\Http\Controllers\clients\ToursController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\TravelGuidesController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\BlogDetailController;
use App\Http\Controllers\clients\LoginController;
use App\Http\Controllers\admin\AdminManagementController;
use App\Http\Controllers\admin\BookingManagementController;
use App\Http\Controllers\admin\ContactManagementController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginAdminController;
use App\Http\Controllers\admin\ToursManagementController;
use App\Http\Controllers\admin\UserManagementController;


Route::get('/', [HomeController::class, 'index']) -> name('home');
Route::get('/about', [AboutController::class, 'index']) -> name('about');
Route::get('/services', [ServicesController::class, 'index']) -> name('services');
Route::get('/tours', [ToursController::class, 'index']) -> name('tours');
Route::get('/tour-detail', [TourDetailController::class, 'index']) -> name('tour-detail');
Route::get('/destination', [DestinationController::class, 'index']) -> name('destination');
Route::get('/booking', [BookingController::class, 'index']) -> name('booking');
Route::get('/travel-guides', [TravelGuidesController::class, 'index']) -> name('team');
Route::get('/contact', [ContactController::class, 'index']) -> name('contact');
Route::get('/blogs', [BlogController::class, 'index']) -> name('blogs');
Route::get('/blog-detail', [BlogDetailController::class, 'index']) -> name('blog-detail');
Route::get('/login', [LoginController::class, 'index']) -> name('login');
// Route::get('/manager', [AdminController::class, 'index']) -> name('manager');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin', [AdminManagementController::class, 'index'])->name('admin.admin');
    Route::get('/bookings', [BookingManagementController::class, 'index'])->name('admin.bookings');
    Route::get('/contacts', [ContactManagementController::class, 'index'])->name('admin.contacts');
    Route::get('/tours', [ToursManagementController::class, 'index'])->name('admin.tours');
    Route::get('/users', [UserManagementController::class, 'index'])->name('admin.users');
    Route::get('/login', [LoginAdminController::class, 'index'])->name('admin.login');
});