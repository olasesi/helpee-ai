<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Google
Route::get('login/google', [LoginController::class, 'redirectToProviderGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleProviderCallbackGoogle']);

//Linkedin
Route::get('login/linkedin', [LoginController::class, 'redirectToProviderLinkedin'])->name('login.linkedin');
Route::get('login/linkedin/callback', [LoginController::class, 'handleProviderCallbackLinkedin']);

//Facebook
Route::get('login/facebook', [LoginController::class, 'redirectToProviderFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderCallbackFacebook']);

//Twitter
Route::get('login/twitter', [LoginController::class, 'redirectToProviderTwitter'])->name('login.twitter');
Route::get('login/twitter/callback', [LoginController::class, 'handleProviderCallbackTwitter']);
