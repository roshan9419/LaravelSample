<?php

use App\Http\Controllers\CookieController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestMailController;
use App\Http\Controllers\PizzaController;

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

Route::get('/', function () {
    return view('mail.holi-template');
    // return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus', ['data' => '11903306']);
});

// Named routing
// Route::get('profile', [LoginController::class, 'profile'])->name('profile');

// Basic Routing
Route::get('login', [LoginController::class, 'login_form']);
Route::get('forgot', [LoginController::class, 'forgot_password']);
Route::get('/user/{id}', [LoginController::class, 'show']);
Route::get('/user/{id}/skills/{skill}', [LoginController::class, 'user_skills']);
Route::post('process', [LoginController::class, 'login_process']);

// Group routing
Route::prefix('gallery') -> group(function () {
    Route::get('/', function () {
        return "Welcome to your Gallery!";
    });
    Route::get('photos', [GalleryController::class, 'photos']);
    Route::get('videos', [GalleryController::class, 'videos']);
    Route::get('docs', [GalleryController::class, 'docs']);
});

// Middleware
Route::get('month/{num}', function($num) {
    $months = array('JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEPT', 'OCT', 'NOV', 'DEC');
    return 'Month name: <b>'.$months[$num-1].'</b>';
})->middleware('month');

// Showing Invalid Messages
Route::get('invalid/{msg}', function($msg) {
    return $msg;
});


// Working with MySQL
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::delete('/pizzas/{id}', [PizzaController::class, 'delete'])->name('pizzas.delete');


// Cookies
Route::get('/cookie/set', [CookieController::class, 'setCookie']);
Route::get('/cookie/get', [CookieController::class, 'getCookie']);
Route::get('/cookie/remove', [CookieController::class, 'deleteCookie']);


// Mail
Route::get('/mail', [TestMailController::class, 'form']);
Route::post('/mail/send', [TestMailController::class, 'sendMail'])->name('mail.send');

// Mail
// Route::get('/mail', [MailController::class, 'form']);
// Route::post('/mail/send', [MailController::class, 'sendMail']);


// Personal Information
Route::get('/profile', [FormController::class, 'form'])->name('profile.form');
Route::post('/profile/add', [FormController::class, 'addDetails'])->name('profile.add');

// Image Uploader
Route::get('/my-gallery', [ImageUploadController::class, 'getAllImages'])->name('gallery.list');
Route::get('/my-gallery/upload', [ImageUploadController::class, 'uploadForm'])->name('gallery.form');
Route::post('/my-gallery/upload', [ImageUploadController::class, 'uploadImage'])->name('gallery.upload');