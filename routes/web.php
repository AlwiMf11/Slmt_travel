<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Destinations
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('/destinations/{destination}', [DestinationController::class, 'show'])->name('destinations.show');

// Tour Packages
Route::get('/tour-packages', [TourPackageController::class, 'index'])->name('tour-packages.index');
Route::get('/tour-packages/{tourPackage}', [TourPackageController::class, 'show'])->name('tour-packages.show');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
