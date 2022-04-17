<?php

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

use Modules\Financial\Http\Controllers\BankAccountTypeController;
use Modules\Financial\Http\Controllers\BankController;

Route::group(['as' => 'financial.'], function () {
    Route::resource('bank', BankController::class);
    Route::resource('bankAccountType', BankAccountTypeController::class);
});
