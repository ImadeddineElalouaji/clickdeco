<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecoratorImageController;
use App\Http\Controllers\DecoratorSubmissionController;
use App\Http\Controllers\DecoratorController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DecoratorCommentController;
Route::post('/decorators/{id}/comment', [DecoratorCommentController::class, 'store'])->name('decorators.comment');
Route::get('/decorators/submit', [DecoratorSubmissionController::class, 'showForm'])->name('showForm');
// Route::get('/decorators/{id}', [DecoratorController::class, 'show'])->name('decorators.show');
Route::get('/decorators', [DecoratorController::class, 'index'])->name('decorators.list');
Route::post('decorators/login', [LoginController::class, 'decoratorLogin'])->name('decorators.login');
Route::get('/decorators/{id}', [DecoratorSubmissionController::class, 'showDecorator'])->name('decorators.show');


Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
//



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
Route::get('/creations/{id}', [App\Http\Controllers\DecoratorSubmissionController::class, 'show'])->name('creations.show');

Route::get('/creations', [DecoratorSubmissionController::class, 'indexAll'])->name('creations.index');

Route::get('messages/inbox', [MessageController::class, 'index'])->name('messages.inbox');
Route::get('messages/create/{receiver_id}', [MessageController::class, 'create'])->name('messages.create');

Route::post('messages', [MessageController::class, 'store'])->name('messages.store');

Route::get('/messages/create/{receiver_id}', [MessageController::class, 'create'])->name('messages.create');
Route::get('/messages/view/{sender_id}', [MessageController::class, 'viewMessages'])->name('messages.view');
Route::post('/messages/store', [MessageController::class, 'store'])->name('messages.store');
// Display the form



// Route to list decorators
Route::get('/decorators', [DecoratorSubmissionController::class, 'listDecorators'])->name('decorators.list');

// Route to show decorator details



// Handle the form submission
Route::post('/decorators/submit', [DecoratorSubmissionController::class, 'submitForm'])->name('decorators.submit');

Route::get('/contact.blade.php', function () {
    return view('bliss-html.contact');
});
Route::get('/about', function () {
    return view('bliss-html.about');
});
Route::get('/index.html', function () {
    return view('bliss-html.index');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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




