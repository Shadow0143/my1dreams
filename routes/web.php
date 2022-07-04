<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\MemberController;
Use Illuminate\Support\Facades\Auth;
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
// return view('blockpage');



Route::middleware(['auth','checkblock','superadminAccess'])->prefix('admin')->group(function () {
    Route::get('/master', [App\Http\Controllers\MasterController::class, 'master'])->name('master');
    Route::get('/master-form', [App\Http\Controllers\MasterController::class, 'addMasterForm'])->name('addMasterForm');
    Route::post('/submit-master', [App\Http\Controllers\MasterController::class, 'submitMaster'])->name('submitMaster');
    Route::get('/block-master', [App\Http\Controllers\MasterController::class, 'blockMaster'])->name('blockMaster');
    Route::get('/edit-master/{id}', [App\Http\Controllers\MasterController::class, 'editMaster'])->name('editMaster');

});

Route::middleware(['auth','checkblock','masterAccess'])->prefix('master')->group(function () {
    Route::get('/member', [App\Http\Controllers\MemberController::class, 'member'])->name('member');
    Route::get('/member-form', [App\Http\Controllers\MemberController::class, 'addMemberForm'])->name('addMemberForm');
    Route::post('/submit-member', [App\Http\Controllers\MemberController::class, 'submitMember'])->name('submitMember');
    Route::get('/block-member', [App\Http\Controllers\MemberController::class, 'blockMember'])->name('blockMember');
    Route::get('/delete-member', [App\Http\Controllers\MemberController::class, 'deleteMember'])->name('deleteMember');
    Route::get('/edit-member/{id}', [App\Http\Controllers\MemberController::class, 'editMember'])->name('editMember');
});


Route::middleware(['auth','checkblock'])->group(function () {
    
});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/custom-login', [App\Http\Controllers\CustomController::class, 'customLogin'])->name('customLogin');
Route::get('/block-page', [App\Http\Controllers\CustomController::class, 'blockpage'])->name('blockpage');
Route::get('/no-access', [App\Http\Controllers\CustomController::class, 'noAccessPage'])->name('noAccessPage');

Route::get('/play-game', [App\Http\Controllers\PlayGameController::class, 'playGame'])->name('playGame');
Route::post('/add-amount', [App\Http\Controllers\PlayGameController::class, 'addAmount'])->name('addAmount');





Route::get('/', function () {
    return view('welcome');
});

