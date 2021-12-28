<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Attendant\AttendantDashboardController;


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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified', 'role:admin']], function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin_dashboard');
});

Route::group(['middleware' => ['auth:sanctum', 'verified', 'role:attendant']], function () {
    Route::get('dashboard', [AttendantDashboardController::class, 'index'])->name('attendant_dashboard');
    Route::get('attendant_dashboard', [AttendantDashboardController::class, 'index'])->name('attendant_dashboard');
});


Route::group(['middleware' => ['auth:sanctum', 'verified', 'role:user']], function () {
    Route::get('dashboard', [UserDashboardController::class, 'index'])->name('user_dashboard');
    
});

/**
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');
});
*/