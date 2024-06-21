<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('LandingPage');
});


Route::get('/home', [HomeController::class, 'ViewHomePage']);
Route::get('/landing-page', [HomeController::class, 'ViewLandingPage']);
Route::get('/about', [HomeController::class, 'ViewAboutPage']);
Route::get('/profile', [HomeController::class, 'ViewProfile'])->middleware('App\Http\Middleware\IsLogin');
Route::post('/logout',[HomeController::class, 'LogoutHome']);

Route::get('/add-video', [VideoController::class, 'ViewAddVideo'])->middleware('App\Http\Middleware\IsAdmin');
Route::post('/add-video1',[VideoController::class, 'GetVideo'])->middleware('App\Http\Middleware\IsAdmin');
Route::get('/video/{id}', [VideoController::class, 'ViewVideoPage']);

// Route::get('/dashboard', [HomeController::class, 'ViewDashboard']);
Route::get('/dashboard', [ReportController::class, 'ViewDataReportPage'])->middleware('App\Http\Middleware\IsLogin');

Route::get('/report', [ReportController::class, 'ViewReportPage']);

Route::post('/report1', [ReportController::class, 'StoreReportData'])->middleware('App\Http\Middleware\IsLogin');

Route::get('/noti', function () {
    return view('notify');
});

Route::post('/test', [NotifyController::class, 'sendNotification'])->name('notification.send');

Route::get('/login', [LoginController::class, 'ViewLoginPage']);
Route::post('/login', [LoginController::class, 'StoreLoginData']);

Route::get('/register', [RegisterController::class, 'ViewRegisterPage']);
Route::post('/register', [RegisterController::class, 'StoreRegisterData']);

Route::post('/notify', [NotifyController::class, 'GetEmail'])->middleware('App\Http\Middleware\IsLogin');


