<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SavingsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;

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
    return view('home');
})->name('home');
Route::get('nonmember', function () {
    return view('partials.non-member');
})->name('nonmember');
Route::get('test', function () {
    return view('testpage');
})->name('test');
Route::get('allSavings', [SavingsController::class, 'getSavings'])->name('getSavings');
Route::get('downloadPDF', [SavingsController::class, 'downloadPDF'])->name('downloadPDF');

Route::middleware(['auth:sanctum', 'verified', 'auth.member'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth', 'middleware' => 'auth.member'], function () {
    Route::resource('savings', SavingsController::class);
    Route::resource('getSavings', SavingsController::class);
    Route::resource('users', UsersController::class);
    // Route::resource('dashboard', DashboardController::class);
});
