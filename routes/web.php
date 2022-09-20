<?php

use App\Http\Controllers\{AuthController};
use App\Http\Controllers\admin\{HomeController as AdminHomeController};
use App\Http\Controllers\user\{HomeController as UserHomeController, InputDataController};
use Illuminate\Support\Facades\Route;

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
    return view('main-login');
});

Route::get('/auth/login', [AuthController::class, 'index'])->name('getLogin');
Route::post('/auth/login',[AuthController::class, 'postLogin'])->name('postLogin');

Route::group(['middleware' => ['admin_auth']], function() {
    // Admin
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
    
    // User
    Route::get('/home', [UserHomeController::class, 'index'])->name('home');
    Route::get('/input', [InputDataController::class, 'index'])->name('input');



    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});