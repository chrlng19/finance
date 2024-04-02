<?php

use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ReportsController;

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

Route::get('/', function () {
    return view('/auth/login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Route::resource('risk', 'App\Http\Controllers\AccountController');
//Route::get('/accounts', 'App\Http\Controllers\AccountController@index')->name('accounts.index');
//Route::get('/accounts/create', 'App\Http\Controllers\AccountController@create')->name('accounts.create');
//Route::post('/accounts', 'App\Http\Controllers\AccountController@store')->name('accounts.store');
//Route::resource('accounts', 'App\Http\Controllers\AccountController');


// routes/web.php for Redirect

// use App\Http\Controllers\Auth\RegisteredUserController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;

//Route::get('/register', [RegisteredUserController::class, 'create'])
//  ->middleware('guest')
//   ->name('register');

//Route::post('/register', [RegisteredUserController::class, 'store'])
//   ->middleware('guest');

//Route::get('/login', [AuthenticatedSessionController::class, 'create'])
//    ->middleware('guest')
//    ->name('login');

//Route::post('/login', [AuthenticatedSessionController::class, 'store'])
//  ->middleware('guest');  -->

// Other routes...

//Foget Password
use App\Http\Controllers\Auth\ForgotPasswordController;

// Show the password reset request form
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->middleware('guest')
    ->name('password.request');

// Handle the password reset request
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->middleware('guest')
    ->name('password.email');

// Show the password reset form
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset');

// Handle the password reset request
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->middleware('guest')
    ->name('password.update');



Route::get('/reports/chart-data', [ReportsController::class, 'getChartData'])->name('reports.chartData');

// routes/web.php

use App\Http\Controllers\RiskController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FormController;

Route::get('/risk', [RiskController::class, 'index'])->name('risk.index');
Route::get('/create', [RiskController::class, 'create'])->name('risk.create');
Route::resource('risks', RiskController::class);
Route::resource('clients', ClientController::class);
Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submitForm');
Route::post('/submit-form', [FormController::class, 'store'])->name('submitForm');







require __DIR__ . '/auth.php';
