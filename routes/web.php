<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome1');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/', [ReservationController::class, 'store'])->name('submit-reservation');

Route::get('/news', [NewsController::class, 'getTopHeadlines'])->name('news');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

// Display all reservations
Route::get('/dashboard', [ReservationController::class, 'index'])->name('dashboard');

//accept id
Route::post('/accept/{reservation}', [ReservationController::class, 'accept'])->name('accept.reservation');

// Display a specific
Route::get('/dashboard/{reservation}', [ReservationController::class, 'show'])->name('show-reservation');

// Display the form for editing
Route::get('/dashboard/{reservation}/edit', [ReservationController::class, 'edit'])->name('edit-reservation');

// Update
Route::put('/dashboard/{reservation}', [ReservationController::class, 'update']);

// Delete 
Route::delete('/dashboard/{reservation}', [ReservationController::class, 'destroy']);


});
