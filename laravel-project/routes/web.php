<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
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
    return view('pages/main');
});

Route::get('/create', [TravelController::class, 'create']);
Route::get('/guestlogin', [LoginController::class, 'guestLogin'])->name('guestlogin');
Route::get('/{user_id}/mypage', [TravelController::class, 'mypage'])->name('travel.mypage');
Route::post('/travel/create', [TravelController::class, 'store']);
Route::get('/travel/create/complete', [TravelController::class, 'complete']);
Route::get('/travel/edit/{id}', [TravelController::class, 'edit'])->name('travel.edit');
Route::post('/travel/{id}', [TravelController::class, 'update']) -> name('travel.update');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
