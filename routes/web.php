<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/refill-amount', [App\Http\Controllers\MasterController::class, 'refillAmount'])->name('refillAmount');
    Route::get('/geit-refill-amount-details', [App\Http\Controllers\MasterController::class, 'getRefillAmountDetail'])->name('getRefillAmountDetail');
    Route::post('/submit-refill-amount', [App\Http\Controllers\MasterController::class, 'submitRefillAmount'])->name('submitRefillAmount');
    Route::get('/member-by-superadmin', [App\Http\Controllers\MasterController::class, 'memberBySuperAdmin'])->name('memberBySuperAdmin');
    Route::get('/member-by-superadmin-form', [App\Http\Controllers\MasterController::class, 'memberBySuperAdminForm'])->name('memberBySuperAdminForm');
    Route::post('/submit-member-form', [App\Http\Controllers\MasterController::class, 'submitMemberForm'])->name('submitMemberForm');
    Route::get('/block-member-by-superadmin', [App\Http\Controllers\MasterController::class, 'blockMemberBySuperadmin'])->name('blockMemberBySuperadmin');
    Route::get('/delete-member-by-superadmin', [App\Http\Controllers\MasterController::class, 'deleteMemberBySuperadmin'])->name('deleteMemberBySuperadmin');
    Route::get('/edit-member-by-superadmin/{id}', [App\Http\Controllers\MasterController::class, 'editMemberBySuperadmin'])->name('editMemberBySuperadmin');
    Route::get('/result', [App\Http\Controllers\MasterController::class, 'result'])->name('result');
    Route::get('/result-form', [App\Http\Controllers\MasterController::class, 'resultForm'])->name('resultForm');
    Route::post('/subimt-result', [App\Http\Controllers\MasterController::class, 'submitResult'])->name('submitResult');


});

Route::middleware(['auth','checkblock','masterAccess'])->prefix('master')->group(function () {
    Route::get('/member', [App\Http\Controllers\MemberController::class, 'member'])->name('member');
    Route::get('/member-form', [App\Http\Controllers\MemberController::class, 'addMemberForm'])->name('addMemberForm');
    Route::post('/submit-member', [App\Http\Controllers\MemberController::class, 'submitMember'])->name('submitMember');
    Route::get('/block-member', [App\Http\Controllers\MemberController::class, 'blockMember'])->name('blockMember');
    Route::get('/delete-member', [App\Http\Controllers\MemberController::class, 'deleteMember'])->name('deleteMember');
    Route::get('/edit-member/{id}', [App\Http\Controllers\MemberController::class, 'editMember'])->name('editMember');
});


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/custom-login', [App\Http\Controllers\CustomController::class, 'customLogin'])->name('customLogin');
Route::get('/block-page', [App\Http\Controllers\CustomController::class, 'blockpage'])->name('blockpage');
Route::get('/no-access', [App\Http\Controllers\CustomController::class, 'noAccessPage'])->name('noAccessPage');

Route::get('/play-game', [App\Http\Controllers\PlayGameController::class, 'playGame'])->name('playGame');
Route::post('/add-amount', [App\Http\Controllers\PlayGameController::class, 'addAmount'])->name('addAmount');
Route::get('/view-result', [App\Http\Controllers\PlayGameController::class, 'viewResult'])->name('viewResult');

Route::get('/view-profile/{id}', [App\Http\Controllers\ProfileController::class, 'viewProfile'])->name('viewProfile');
Route::post('/save-profile-image', [App\Http\Controllers\ProfileController::class, 'saveProfileImage'])->name('saveProfileImage');
Route::post('/save-user-details', [App\Http\Controllers\ProfileController::class, 'saveUserDetails'])->name('saveUserDetails');





Route::get('/', function () {
    return view('welcome');
});

