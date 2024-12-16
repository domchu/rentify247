<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProfileController;

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

// team

Route::resource('admin.team', TeamController::class);

Route::controller(App\Http\Controllers\TeamController::class)->group(function () {
    route::get('/team/create', 'create');
    route::post('/team/create', 'store');  
    // route::get('/admin/team/create', 'create');
}); 