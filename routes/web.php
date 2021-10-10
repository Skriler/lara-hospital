<?php

use App\Http\Controllers\PageController;
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

Route::group(['prefix' => 'control-panel'], function () {
    Route::group(['prefix' => 'surgeon'], function () {
        Route::get( '/add', [PageController::class, 'addSurgeonPage'])
            ->name('control-panel.surgeon.add');
        Route::get( '/delete', [PageController::class, 'deleteSurgeonPage'])
            ->name('control-panel.surgeon.delete');
    });

    Route::group(['prefix' => 'tariff'], function () {
        Route::get( '/add', [PageController::class, 'addTariffPage'])
            ->name('control-panel.tariff.add');
        Route::get( '/delete', [PageController::class, 'deleteTariffPage'])
            ->name('control-panel.tariff.delete');
    });

    Route::group(['prefix' => 'patient'], function () {
        Route::get( '/add', [PageController::class, 'addPatientPage'])
            ->name('control-panel.patient.add');
        Route::get( '/delete', [PageController::class, 'deletePatientPage'])
            ->name('control-panel.patient.delete');
    });
});
