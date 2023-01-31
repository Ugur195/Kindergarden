<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\LangController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\DistrictController;
use App\Http\Controllers\admin\KindergardenController;
use App\Http\Controllers\admin\VacancyController;
use App\Http\Controllers\admin\WorkerController;
use App\Http\Controllers\admin\CvController;
use App\Http\Controllers\frontend\{
    AuthController as AuthFrontController,
    ContactController as ContactFrontController,
    VacancyController as VacancyFrontController,
    KindergardenController as KindergardenFrontController,
    WorkerController as WorkerFrontController,
    AboutUsController
};

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

//frontend
Route::name('frontend.')->group(function () {
    Route::get('/', [AuthFrontController::class, 'home']);
    Route::get('/about_us', [AboutUsController::class, 'index']);
    Route::get('/contact_us', [ContactFrontController::class, 'index']);
    Route::get('/vacancies', [VacancyFrontController::class, 'index'])->name('vacancies');
    Route::get('/vacancies/create', [VacancyFrontController::class, 'create'])->name('vacancies.create');
    Route::post('/vacancies/store', [VacancyFrontController::class, 'store'])->name('vacancies.store');
    Route::get('/kindergardens', [KindergardenFrontController::class, 'index'])->name('kindergardens');
    Route::get('/kindergardens/edit/{id}', [KindergardenFrontController::class, 'edit'])->name('kindergardens.edit');
    Route::get('/workers', [WorkerFrontController::class, 'index'])->name('workers');
    Route::get('/workers/edit/{id}', [WorkerFrontController::class, 'edit'])->name('workers.edit');

});


//admin
Route::group(['prefix' => '/admin'], function () {
    Route::group(['middleware' => 'isLogin'], function () {
        Route::get('/', [AuthController::class, 'index'])->name('login');
        Route::post('/', [AuthController::class, 'login'])->name('login.submit');
    });
    Route::group(['middleware' => 'noLogin'], function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/dashboard', function () {
            return view('admin/dashboard');
        })->name('dashboard');

        Route::get('/languages', [LangController::class, 'index'])->name('lang');
        Route::post('/languages', [LangController::class, 'store'])->name('lang.submit');
        Route::get('/languages/edit/{id}', [LangController::class, 'edit'])->name('lang.edit');
        Route::post('/languages/update/{id}', [LangController::class, 'update'])->name('lang.update');
        Route::get('/languages/delete/{id}', [LangController::class, 'delete'])->name('lang.delete');

        Route::get('/districts', [DistrictController::class, 'index'])->name('district');
        Route::post('/districts', [DistrictController::class, 'store'])->name('district.submit');
        Route::get('/districts/edit/{id}', [DistrictController::class, 'edit'])->name('district.edit');
        Route::post('/districts/update/{id}', [DistrictController::class, 'update'])->name('district.update');
        Route::get('/districts/delete/{id}', [DistrictController::class, 'delete'])->name('district.delete');

        Route::get('/kindergardens', [KindergardenController::class, 'index'])->name('kindergarden');
        Route::post('/kindergardens', [KindergardenController::class, 'store'])->name('kindergarden.submit');
        Route::get('/kindergardens/edit/{id}', [KindergardenController::class, 'edit'])->name('kindergarden.edit');
        Route::post('/kindergardens/update/{id}', [KindergardenController::class, 'update'])->name('kindergarden.update');
        Route::get('/kindergardens/delete/{id}', [KindergardenController::class, 'delete'])->name('kindergarden.delete');


        Route::get('/vacancies', [VacancyController::class, 'index'])->name('vacancy');
        Route::post('/vacancies', [VacancyController::class, 'store'])->name('vacancy.submit');
        Route::get('/vacancies/edit/{id}', [VacancyController::class, 'edit'])->name('vacancy.edit');
        Route::post('/vacancies/update/{id}', [VacancyController::class, 'update'])->name('vacancy.update');
        Route::get('/vacancies/delete/{id}', [VacancyController::class, 'delete'])->name('vacancy.delete');

        Route::get('/workers', [WorkerController::class, 'index'])->name('worker');
        Route::post('/workers', [WorkerController::class, 'store'])->name('worker.submit');
        Route::get('/workers/edit/{id}', [WorkerController::class, 'edit'])->name('worker.edit');
        Route::post('/workers/update/{id}', [WorkerController::class, 'update'])->name('worker.update');
        Route::get('/workers/delete/{id}', [WorkerController::class, 'delete'])->name('worker.delete');

        Route::get('/profile/edit', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/contacts/edit', [ContactController::class, 'index'])->name('contacts');
        Route::post('/contacts/update', [ContactController::class, 'update'])->name('contacts.update');

        Route::get('/cv', [CvController::class, 'index'])->name('cv');
        Route::get('/cv/delete/{id}', [CvController::class, 'delete'])->name('cv.delete');


        Route::get('/message', [MessageController::class, 'index'])->name('message');
        Route::get('/message/delete/{id}', [MessageController::class, 'delete'])->name('message.delete');

        Route::get('/users', [UserController::class, 'index'])->name('user');
        Route::post('/users', [UserController::class, 'store'])->name('user.submit');
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    });
});

