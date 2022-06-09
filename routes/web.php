<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\New_ProfileController;
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

//Route::get('/new_profile', [New_ProfileController::class, 'show'])->name('new_profile');


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
//    $tt = RPDS::find(12);
//
//    $tt->delete();
     return view('test_page');
});

Route::get('/download', function(){
    $list = RPDS::all();

    $fp = fopen('csv/file.csv', 'w');
    fputcsv($fp, [
        'Название_дисциплины',
        'Название_департамента',
        //наименование образовательной программы
        //очная заочная
        'курс',
        'семестр',
        'лекции',
        'практические_занятия',
        'лабораторные_работы',
        //в том числе с использованием МАО лек. пр. лаб
        //всего часов аудитовной нагрузки
        //в том числе с использованиме мао
        'самостоятельая_работа',
        //на подготовку к экзамену
        'контрольные_работы',
        'курсовая_работа',
        'зачет',
        'экзамен',
        'цель_дисциплины',
        'задачи_цисциплины',
        //здесь жесть с компетенциями
        //
        //1часть
        'лекции',
    ]);
    foreach ($list as $one) {
        fputcsv($fp, [
            $one->discipline,
            $one->departaments->title,
            $one->timeForRPD->course,
            $one->timeForRPD->semester,
            $one->timeForRPD->lectures,
            $one->timeForRPD->practice,
            $one->timeForRPD->laboratory,
            $one->timeForRPD->SP,
            $one->formControl->KR,
            $one->formControl->KP,
            $one->formControl->zachet,
            $one->formControl->examination,
            $one->BasicInformation->purpose,
            $one->BasicInformation->task,
            $one->BasicInformation->theoretical->lectures,
        ]);

    }
    return response()->download(public_path('csv/file.csv'));
});


Route::get('/', [AuthController::class, 'redirectMaster'])->name('redirectMaster');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');
Route::get('/admin_page', [ProfileController::class, 'show_Admin_Page'])->name('admin_page');


Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/registration', [AuthController::class, 'registrationForm'])->name('registration');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/create_page', [CreatePageController::class, 'create_page_Form'])->name('create_page');
Route::post('/create_page', [CreatePageController::class, 'create_page'])->name('create_page.post');

Route::get('/check_page', [CheckPageController::class, 'check_page_Form'])->name('check_page');
Route::post('/check_page', [CheckPageController::class, 'check_page'])->name('check_page.post');

Route::get('/edit_page', [EditPageController::class, 'edit_page_Form'])->name('edit_page');
Route::post('/edit_page', [EditPageController::class, 'edit_page'])->name('edit_page.post');

Route::get('how_to_use', [ProfileController::class, 'show_How_to_Use'])->name('how_to_use');


