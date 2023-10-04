<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

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
Route::post('/travel/create', [TravelController::class, 'store']);
Route::get('/travel/create/complete', [TravelController::class, 'complete']);
Route::get('/travel/edit/{id}', [TravelController::class, 'edit'])->name('travel.edit');
