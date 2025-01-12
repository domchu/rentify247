<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('category', function () {
        return view('admin.category.index');
    });

});

require __DIR__.'/auth.php';
require __DIR__.'/admin.auth.php';

/*-- PAGES ROUTES */
Route::get('/sponsor', function () {
    return view('pages.sponsor');
});
Route::get('/privacy-policy', function () {
    return view('pages.privacy');
});
Route::get('/booking', function () {
    return view('pages.booking');
});
Route::get('/terms-and-conditions', function () {
    return view('pages.terms');
});
Route::get('/contact-us', function () {
    return view('pages.contact');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/why-us', function () {
    return view('pages.why-us');
});