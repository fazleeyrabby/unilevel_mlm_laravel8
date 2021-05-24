<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PackageController;
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

Auth::routes();

Route::get('info', function() { phpinfo(); });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard2', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard2'])->name('dashboard2');
    
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');
    Route::get('/users/join', [App\Http\Controllers\Admin\UserController::class, 'join'])->name('join');
    Route::post('/users/join', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');

    Route::get('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('profile');
    Route::get('/users/{id}/profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('profile');
    Route::get('/users/{id}/bonus', [App\Http\Controllers\Admin\UserController::class, 'bonus'])->name('bonus');
    Route::get('/users/{id}/wallet', [App\Http\Controllers\Admin\UserController::class, 'wallet'])->name('wallet');
    Route::get('/users/{id}/referral', [App\Http\Controllers\Admin\UserController::class, 'referral'])->name('referral');

    

    Route::post('/users/{id}/update-contact', [App\Http\Controllers\Admin\UserController::class, 'contact_update'])->name('contact_update');
    Route::post('/users/{id}/update-password', [App\Http\Controllers\Admin\UserController::class, 'password_update'])->name('password_update');
    Route::post('/users/{id}/update-trans-pass', [App\Http\Controllers\Admin\UserController::class, 'trans_pass_update'])->name('trans_pass_update');

    Route::get('/blank', [App\Http\Controllers\Admin\DashboardController::class, 'blank'])->name('blank');


    Route::resources([
        'packages' => PackageController::class
    ]);
   
});


Route::get('/datatables', [App\Http\Controllers\DatatablesController::class, 'getIndex'])->name('datatables');
Route::get('/any-data', [App\Http\Controllers\DatatablesController::class, 'anyData'])->name('anyData');

