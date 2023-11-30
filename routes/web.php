<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureIdMatch;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/main',[MainPageController::class, 'main']);
Route::get('/', [ListingController::class, 'index']);
Route::post('/listings', [ListingController::class, 'store'])->name('listing.store');
Route::get('/listings/create', [ListingController::class, 'create'])->name('listing.create')->middleware('auth');
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit')->middleware('auth');
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listing.update')->middleware('auth');
Route::get('/listings/manage', [ListingController::class    , 'manage'])->middleware('auth');
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->name('listing.delete')->middleware('auth');
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listing.view');
Route::get('/register', [UserController::class, 'create'])->name('user.create')->middleware('guest');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/login', [UserController::class, 'login'])->name('user.login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('user.authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');
