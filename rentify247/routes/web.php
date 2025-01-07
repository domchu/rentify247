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

// Route::resource('admin.team', TeamController::class);

Route::controller(App\Http\Controllers\TeamController::class)->group(function () {
    route::get('/team/add-team', 'create');
    route::post('/team/add-team', 'store');

});

//
//Sliders fetch

//Reviews fetch

Route::get('/', function () {

      $slides = [
        ['id' => 1, 'image' => './images/PIC-1.jpg', 'description' => 'Description 1'],
        ['id' => 2, 'image' => './images/PIC-2.jpg', 'description' => 'Description 2'],
        ['id' => 3, 'image' => './images/PIC-3.jpg', 'description' => 'Description 3'],
        ['id' => 4, 'image' => './images/PIC-4.jpg', 'description' => 'Description 4'],
        ['id' => 5, 'image' => './images/PIC-5.jpg', 'description' => 'Description 5'],
    ];

   $reviews = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'location' => 'New York, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=male',
            'rating' => 5,
            // 'comment' => 'Great service and very professional!',
            'comment' => 'Great service and very professional!',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'location' => 'Los Angeles, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=female',
            'rating' => 4,
            'comment' => 'Highly recommend this service.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 3,
            'name' => 'Alice Johnson',
            'location' => 'Chicago, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=male',
            'rating' => 3,
            'comment' => 'Very satisfied with the service provided. dgfshs sbfgj hfegfiw hejh',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 4,
            'name' => 'Bob Brown',
            'location' => 'Houston, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=female',
            'rating' => 4,
            'comment' => 'Quick and reliable service.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 5,
            'name' => 'Charlie Davis',
            'location' => 'Phoenix, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=male',
            'rating' => 5,
            'comment' => 'Friendly staff and great support.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 6,
            'name' => 'Diana Evans',
            'location' => 'Philadelphia, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=female',
            'rating' => 4,
            'comment' => 'Affordable and efficient.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 7,
            'name' => 'Ethan Harris',
            'location' => 'San Antonio, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=male',
            'rating' => 5,
            'comment' => 'Top-notch service!',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 8,
            'name' => 'Fiona Green',
            'location' => 'San Diego, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=female',
            'rating' => 5,
            'comment' => 'Exceeded my expectations.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 9,
            'name' => 'George Hill',
            'location' => 'Dallas, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=male',
            'rating' => 4,
            'comment' => 'Very professional and courteous.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 10,
            'name' => 'Hannah Lee',
            'location' => 'San Jose, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=female',
            'rating' => 5,
            'comment' => 'Will definitely use again.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 11,
            'name' => 'Ian Martin',
            'location' => 'Austin, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=male',
            'rating' => 4,
            'comment' => 'Great value for money.',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 12,
            'name' => 'Julia Nelson',
            'location' => 'Jacksonville, USA',
            'profile_picture' => 'https://xsgames.co/randomusers/avatar.php?g=female',
            'rating' => 2,
            'comment' => 'Very happy with the service.',
            'created_at' => now(),
            'updated_at' => now()
        ],
    ];

  return view('welcome', ['slides' => $slides, 'reviews' => $reviews]);
});
