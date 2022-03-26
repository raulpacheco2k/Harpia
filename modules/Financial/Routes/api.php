<?php

use Modules\Financial\Http\Controllers\Api\ApiBankController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['as' => 'financial.', 'prefix' => 'financial'], function () {
    Route::group([
        'prefix' => '/v1',
        'as' => 'api.',
        'namespace' => 'Api'
    ], function () {
        Route::apiResource('bank', ApiBankController::class);
    });
});
