<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/login/eksekutif', [AuthenticatedSessionController::class, 'loginEksekutif']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('getKelurahan/{kecamatan_id}', [UserReportController::class, 'getKelurahan']);
    Route::get('/dashboard/reports', [DashboardController::class, 'reports'])->name('dashboard.reports');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user_report', UserReportController::class);
    Route::get('user_report/getPdf/{user_report}', [UserReportController::class, 'getPdf'])->name('user_report.getPdf');
    Route::resource('status', StatusController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('socialMedia', SocialMediaController::class);
    Route::resource('about', AboutController::class);
    Route::resource('link', LinkController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('user', UserController::class);
    Route::post('admin/reset_password/{admin}', [AdminController::class, 'reset_password'])->name('admin.reset_password');
    Route::group(['middleware' => ['role:SUPERADMIN']], function () {
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
    });
    Route::post('user_report_status/{user_report_id}', [UserReportStatusController::class, 'store'])->name('user_report_status.store');
    Route::delete('user_report_status/{user_report_status}', [UserReportStatusController::class, 'destroy'])->name('user_report_status.destroy');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__ . '/auth.php';
