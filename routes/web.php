<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\GenealogyController;
use App\Http\Controllers\Admin\FundsController;
use Illuminate\Http\Request;
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

Route::get('update-carry',[App\Http\Controllers\CronJobhandalController::class, 'updateCarryEveryDay']);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function() {
    return redirect('login');
});

Route::get('logout', function(Request $request) { 
    Auth::logout(); 
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});

Route::get('info', function() { phpinfo(); });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function(){
        $role = Auth::user()->role;
        if($role == 'member')
            return redirect('member');
        if($role == 'admin')
            return redirect('admin');
        if($role == ('dealer' || 'sub-dealer'))
            return redirect('dealer');
    });
});

Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
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
    Route::post('/users/{id}/update-role', [App\Http\Controllers\Admin\UserController::class, 'update_role'])->name('update_role');

    Route::get('/funds/transfer', [FundsController::class, 'transfer'])->name('transfer');
    Route::post('/funds/transfer', [FundsController::class, 'postTransfer'])->name('postTransfer');

    Route::get('/funds', [FundsController::class, 'index'])->name('index');
    Route::post('/funds', [FundsController::class, 'addOrDeduct'])->name('addOrDeduct');
    Route::get('/funds/transfer-report', [FundsController::class, 'report'])->name('report');
    Route::get('/funds/income-report', [FundsController::class, 'incomeReport'])->name('incomeReport');

    Route::get('/blank', [App\Http\Controllers\Admin\DashboardController::class, 'blank'])->name('blank');

    Route::resources([
        'packages' => PackageController::class
    ]);
   
    Route::get('genealogy-tree', [App\Http\Controllers\Admin\GenealogyController::class, 'index']);
    Route::get('genealogy-tree/{id}', [App\Http\Controllers\Admin\GenealogyController::class, 'index']);
    
});


Route::middleware(['auth','member'])->prefix('member')->group(function () {
    Route::get('/', [App\Http\Controllers\Member\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Member\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [App\Http\Controllers\Member\UserController::class, 'index'])->name('index');
    Route::get('/users/{id}', [App\Http\Controllers\Member\UserController::class, 'profile'])->name('profile')->where('id', '[0-9]+');
    Route::get('/users/{id}/profile', [App\Http\Controllers\Member\UserController::class, 'profile'])->name('profile');
    Route::get('/users/{id}/bonus', [App\Http\Controllers\Member\UserController::class, 'bonus'])->name('bonus');
    Route::get('/users/{id}/wallet', [App\Http\Controllers\Member\UserController::class, 'wallet'])->name('wallet');
    Route::get('/users/{id}/referral', [App\Http\Controllers\Member\UserController::class, 'referral'])->name('referral');

    Route::post('/users/{id}/update-contact', [App\Http\Controllers\Member\UserController::class, 'contact_update'])->name('contact_update');
    Route::post('/users/{id}/update-password', [App\Http\Controllers\Member\UserController::class, 'password_update'])->name('password_update');
    Route::post('/users/{id}/update-trans-pass', [App\Http\Controllers\Member\UserController::class, 'trans_pass_update'])->name('trans_pass_update');
    Route::post('/users/{id}/update-role', [App\Http\Controllers\Member\UserController::class, 'update_role'])->name('update_role');


    Route::get('genealogy-tree', [App\Http\Controllers\Member\GenealogyController::class, 'index']);
    Route::get('genealogy-tree/{id}', [App\Http\Controllers\Member\GenealogyController::class, 'getGenealogy']);
    Route::get('/users/join', [App\Http\Controllers\Member\UserController::class, 'join'])->name('join');
    Route::post('/users/join', [App\Http\Controllers\Member\UserController::class, 'store'])->name('store');

    Route::get('/income', [App\Http\Controllers\Member\FundsController::class, 'incomeReport'])->name('incomeReport');
    Route::get('/transaction', [App\Http\Controllers\Member\FundsController::class, 'transactionReport'])->name('transactionReport');
    Route::get('/funds/transfer', [App\Http\Controllers\Member\FundsController::class, 'transfer'])->name('transfer');
    Route::post('/funds/transfer', [App\Http\Controllers\Member\FundsController::class, 'postTransfer'])->name('postTransfer');

    Route::get('/funds/withdraw', [App\Http\Controllers\Member\FundsController::class, 'withdraw'])->name('withdraw');
    Route::post('/funds/withdraw', [App\Http\Controllers\Member\FundsController::class, 'postWithdraw'])->name('postWithdraw');

    
});


Route::middleware(['auth','dealer'])->prefix('dealer')->group(function () {

    Route::get('/', [App\Http\Controllers\Dealer\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\Dealer\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [App\Http\Controllers\Dealer\UserController::class, 'index'])->name('index');
    Route::get('/users/{id}', [App\Http\Controllers\Dealer\UserController::class, 'profile'])->name('profile')->where('id', '[0-9]+');
    Route::get('/users/{id}/profile', [App\Http\Controllers\Dealer\UserController::class, 'profile'])->name('profile');
    Route::get('/users/{id}/bonus', [App\Http\Controllers\Dealer\UserController::class, 'bonus'])->name('bonus');
    Route::get('/users/{id}/wallet', [App\Http\Controllers\Dealer\UserController::class, 'wallet'])->name('wallet');
    Route::get('/users/{id}/referral', [App\Http\Controllers\Dealer\UserController::class, 'referral'])->name('referral');

    Route::post('/users/{id}/update-contact', [App\Http\Controllers\Dealer\UserController::class, 'contact_update'])->name('contact_update');
    Route::post('/users/{id}/update-password', [App\Http\Controllers\Dealer\UserController::class, 'password_update'])->name('password_update');
    Route::post('/users/{id}/update-trans-pass', [App\Http\Controllers\Dealer\UserController::class, 'trans_pass_update'])->name('trans_pass_update');
    Route::post('/users/{id}/update-role', [App\Http\Controllers\Dealer\UserController::class, 'update_role'])->name('update_role');


    Route::get('genealogy-tree', [App\Http\Controllers\Dealer\GenealogyController::class, 'index']);
    Route::get('genealogy-tree/{id}', [App\Http\Controllers\Dealer\GenealogyController::class, 'getGenealogy']);
    Route::get('/users/join', [App\Http\Controllers\Dealer\UserController::class, 'join'])->name('join');
    Route::post('/users/join', [App\Http\Controllers\Dealer\UserController::class, 'store'])->name('store');

    Route::get('/funds', [App\Http\Controllers\Dealer\FundsController::class, 'report'])->name('report');
    Route::get('/funds/income', [App\Http\Controllers\Dealer\FundsController::class, 'incomeReport'])->name('incomeReport');
    Route::get('/funds/transfer', [App\Http\Controllers\Dealer\FundsController::class, 'transfer'])->name('transfer');
    Route::post('/funds/transfer', [App\Http\Controllers\Dealer\FundsController::class, 'postTransfer'])->name('postTransfer');

    Route::get('/funds/withdraw', [App\Http\Controllers\Dealer\FundsController::class, 'withdraw'])->name('withdraw');
    Route::post('/funds/withdraw', [App\Http\Controllers\Dealer\FundsController::class, 'postWithdraw'])->name('postWithdraw');

});

Route::get('/datatables', [App\Http\Controllers\DatatablesController::class, 'getIndex'])->name('datatables');
Route::get('/any-data', [App\Http\Controllers\DatatablesController::class, 'anyData'])->name('anyData');

