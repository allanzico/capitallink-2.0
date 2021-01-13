<?php

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('savings', SavingsController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('savings', SavingsController::class);
    Route::resource('users', UsersController::class);
});

Route::namespace('Admin')->prefix('admin')->name('admin')->middleware('can:manage-users')->group(function () {
    Route::resource('users', UsersController::class, ['except' => ['show', 'create', 'store']]);
});
