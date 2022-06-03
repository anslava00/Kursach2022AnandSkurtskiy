<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\MainPageController;
use Illuminate\Support\Facades\Route;
use App\Models\RPDS;
use App\Models\Competencies\Competencies;

/*
|----------------------------------------show----------------------------------
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

Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/registration', [AuthController::class, 'registrationForm'])->name('registration');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('main_page', [MainPageController::class, 'show'])->name('main_page');
Route::post('/toLog', [MainPageController::class, 'redirectToLoginForm'])->name('toLoginForm');
Route::redirect('/toLog', '/login');
Route::post('/toReg', [MainPageController::class, 'redirectToRegistrationForm'])->name('toRegistrationForm');
Route::redirect('/toReg', '/registration');


