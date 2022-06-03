<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\WebPages\CheckPageController;
use App\Http\Controllers\WebPages\CreatePageController;
use App\Http\Controllers\WebPages\EditPageController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    if(Auth::user())
//    return redirect(\route('registration'));
//});

Route::get('/test', function(){
//    $rpds = RPDS::all();
//    foreach($rpds as $rpd){
//        echo $rpd.'<br>';
//        echo "all time:<br>";
//        foreach($rpd->rpdAndCompetencies as $time){
//            echo $time.'<br>';
//        }
//    }
//    echo $rpds->pluck('abbreviathion', 'id');
//    $rpd = $rpds->firstWhere('id', '=',2)->abbreviathion;
//    echo $rpd;
    return view('test_page');
});

Route::get('/', [AuthController::class, 'redirectMaster'])->name('redirectMaster');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/registration', [AuthController::class, 'registrationForm'])->name('registration');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/create_page', [CreatePageController::class, 'create_page_Form'])->name('create_page');
Route::post('/create_page', [CreatePageController::class, 'create_page'])->name('create_page.post');

Route::get('/check_page', [CheckPageController::class, 'check_page_Form'])->name('check_page');
Route::post('/check_page', [CheckPageController::class, 'check_page'])->name('check_page.post');
Route::post('/check_page_get_info', [CheckPageController::class, 'getRPD_info'])->name('check_page_getInfo.post');

Route::get('/edit_page', [EditPageController::class, 'edit_page_Form'])->name('edit_page');
Route::post('/edit_page', [EditPageController::class, 'edit_page'])->name('edit_page.post');

Route::get('main_page', [MainPageController::class, 'show'])->name('main_page');
Route::post('/toLog', [MainPageController::class, 'redirectToLoginForm'])->name('toLoginForm');
Route::redirect('/toLog', '/login');
Route::post('/toReg', [MainPageController::class, 'redirectToRegistrationForm'])->name('toRegistrationForm');
Route::redirect('/toReg', '/registration');

//Route::get('/check', [ProfileController::class, 'checkRole'])->name('check');


