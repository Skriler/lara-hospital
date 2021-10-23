<?php

use App\Http\Controllers\Db\PatientController;
use App\Http\Controllers\Db\SurgeonController;
use App\Http\Controllers\Db\TariffController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\ControlPanelController;
use App\Http\Controllers\Web\ListController;
use App\Http\Controllers\Web\UserSideController;
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

Route::get('/', [UserSideController::class, 'getMainPage'])
    ->name('user-side.main-page');

Route::get('/contacts', [UserSideController::class, 'getContactsPage'])
    ->name('user-side.contacts');

Route::get('login',         [AuthController::class, 'getLoginPage'])
    ->name('user-side.auth.login');
Route::post('login',        [AuthController::class, 'login'])
    ->name('user-side.auth.login');
Route::get('logout',        [AuthController::class, 'logout'])
    ->name('user-side.auth.logout');

Route::group(['prefix' => 'list'], function () {
    Route::get('{table}', [ListController::class, 'getTableListPage'])
        ->name('user-side.list.table');

    Route::post('{table}', [ListController::class, 'getSortedTableListPage'])
        ->name('user-side.list.sorted-table');
});

Route::prefix('control-panel')->middleware('isAdmin')
    ->group(function () {
    Route::group(['prefix' => 'surgeon'], function () {
        Route::get('/add',      [ControlPanelController::class, 'getAddSurgeonPage'])
            ->name('control-panel.surgeon.add');
        Route::get('/delete',   [ControlPanelController::class, 'getDeleteSurgeonPage'])
            ->name('control-panel.surgeon.delete');
        Route::post('/add',      [SurgeonController::class, 'store'])
            ->name('control-panel.surgeon.add');
        Route::post('/delete',   [SurgeonController::class, 'destroy'])
            ->name('control-panel.surgeon.delete');
    });

    Route::group(['prefix' => 'tariff'], function () {
        Route::get('/add',      [ControlPanelController::class, 'getAddTariffPage'])
            ->name('control-panel.tariff.add');
        Route::get('/delete',   [ControlPanelController::class, 'getDeleteTariffPage'])
            ->name('control-panel.tariff.delete');
        Route::post('/add',      [TariffController::class, 'store'])
            ->name('control-panel.tariff.add');
        Route::post('/delete',   [TariffController::class, 'destroy'])
            ->name('control-panel.tariff.delete');
    });

    Route::group(['prefix' => 'patient'], function () {
        Route::get('/add',      [ControlPanelController::class, 'getAddPatientPage'])
            ->name('control-panel.patient.add');
        Route::get('/delete',   [ControlPanelController::class, 'getDeletePatientPage'])
            ->name('control-panel.patient.delete');
        Route::post('/add',      [PatientController::class, 'store'])
            ->name('control-panel.patient.add');
        Route::post('/delete',   [PatientController::class, 'destroy'])
            ->name('control-panel.patient.delete');
    });
});
