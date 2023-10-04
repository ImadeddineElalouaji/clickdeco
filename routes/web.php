<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecoratorImageController;
use App\Http\Controllers\DecoratorSubmissionController;
use App\Http\Controllers\DecoratorController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DecoratorCommentController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\LoginController;

Route::get('/devis', [DevisController::class, 'index'])->name('devis.index');

Route::get('/devis', [DevisController::class, 'index'])->name('devis.index');
Route::get('/devis/create', [DevisController::class, 'create'])->name('devis.create');
Route::post('/devis', [DevisController::class, 'store'])->name('devis.store');
// Route::resource('devis', 'DevisController');
// Route to handle speciality creation via AJAX
Route::post('/specialities', [SpecialityController::class, 'store'])->name('specialities.store');
Route::get('/devis/{devis}/edit', [DevisController::class, 'edit'])->name('devis.edit');
Route::delete('/devis/{devis}', [DevisController::class, 'destroy'])->name('devis.destroy');
Route::put('/devis/{devis}', [DevisController::class, 'update'])->name('devis.update');
Route::get('/devis/{devis}', [DevisController::class, 'show'])->name('devis.show');


Route::delete('/decorators/{id}', [DecoratorSubmissionController::class, 'destroy'])->name('decorators.destroy');


// Route to list specialities (optional, if needed)
Route::get('/specialities', [SpecialityController::class, 'index'])->name('specialities.index');

// Decorator Submission Routes
Route::prefix('decorators')->group(function () {
    // Routes for decorator submissions
    Route::get('/submit', [DecoratorSubmissionController::class, 'showForm'])->name('showForm');
    Route::post('/submit', [DecoratorSubmissionController::class, 'submitForm'])->name('decorators.submit');
    Route::get('/{id}', [DecoratorSubmissionController::class, 'showDecorator'])->name('decorators.show');
    Route::post('/{id}/comment', [DecoratorCommentController::class, 'store'])->name('decorators.comment');
    
    // List decorators
    Route::get('/', [DecoratorSubmissionController::class, 'listDecorators'])->name('decorators.list');
});

// Message Routes
Route::prefix('messages')->group(function () {
    Route::get('/inbox', [MessageController::class, 'index'])->name('messages.inbox');
    Route::get('/create/{receiver_id}', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/view/{sender_id}', [MessageController::class, 'viewMessages'])->name('messages.view');
});
// routes/web.php

// Other Routes
Route::get('/creations/{id}', [DecoratorSubmissionController::class, 'show'])->name('creations.show');
Route::get('/creations', [DecoratorSubmissionController::class, 'indexAll'])->name('creations.index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Your other routes...

// Default route
Route::get('/', function () {
    return view('welcome');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/contact', function () {
    return view('contact');
});

// Authentication routes...
Auth::routes();

// Additional routes...
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile routes...
Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/create', function () {
    return view('create');
});

// Route for deleting decorator images
Route::delete('/decorators/images/{image}', [DecoratorImageController::class, 'destroy'])->name('decorators.images.destroy');
