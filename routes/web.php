<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Link to get the front page.
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/account/registration', [AccountController::class, 'registration'])->name('account.registration');
Route::post('/account/process-registration', [AccountController::class, 'processRegistration'])->name('account.processRegistration');

