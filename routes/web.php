<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

// Set the homepage to display the video submission form
Route::get('/', [VideoController::class, 'create']);

// Handle the form submission and redirect to a specific video page
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');

// Display a specific video
Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');
