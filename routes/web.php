<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterController;
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
    Route::get('/add-master', [App\Http\Controllers\MasterController::class, 'addMasterForm'])->name('addMasterForm');

});


Route::get('/', function () {
    return view('welcome');
});

