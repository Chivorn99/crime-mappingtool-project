<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
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

// Route Public User Webpage
Route::get('/', function () {
    return view('guest/homepage');
});
Route::get('/aboutUs', function () {
    return view('guest/aboutUs');
});
Route::get('/mappage', [MapController::class, 'mappage']);
Route::get('/contact-us', [ContactController::class, 'createGuest'])->name('contact.guestCreate');
Route::post('/contact-us', [ContactController::class, 'storeGuest'])->name('contact.guestSubmit');
Route::get('/getalert', function () {
    return view('guest/getalert');
});

Route::get('/home', function () {
    return view('user/home');
})->middleware(['auth', 'verified'])->name('home');

// User Webpage
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/map', function () {
        return view('user/map');
    });
    Route::get('/aboutUspage', function () {
        return view('user/aboutUspage');
    });
    Route::get('/contact-us-auth', function () {
        return view('user/contactUsAuth');
    });
    Route::post('/contact-us-auth', [ContactController::class, 'storeUser'])->name('storeUser');
    Route::get('/report', [DashboardController::class, 'displayCrimeReport'])->name('displayCrimeReport');
    Route::post('/report', [CrimeController::class, 'reportCrime'])->name('reportCrime');
});


require __DIR__ . '/adminauth.php';
require __DIR__ . '/auth.php';
