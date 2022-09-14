<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\UserReportStatusController;
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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user_report', UserReportController::class);
    Route::resource('status', StatusController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::post('user_report_status/{user_report_id}', [UserReportStatusController::class, 'store'])->name('user_report_status.store');
    Route::delete('user_report_status/{user_report_status}', [UserReportStatusController::class, 'destroy'])->name('user_report_status.destroy');
});

require __DIR__ . '/auth.php';
