<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomController;
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

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->group(function () {
    
    // Dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/master', [App\Http\Controllers\MasterController::class, 'master'])->name('master');
    Route::get('/master-form', [App\Http\Controllers\MasterController::class, 'addMasterForm'])->name('addMasterForm');
    Route::post('/submit-master', [App\Http\Controllers\MasterController::class, 'submitMaster'])->name('submitMaster');
    
});

Route::post('/custom-login', [App\Http\Controllers\CustomController::class, 'customLogin'])->name('customLogin');

Route::get('/', function () {
    return view('welcome');
});

