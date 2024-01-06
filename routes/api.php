<?php

use App\Http\Controllers\Api\V1\ActionApiController;
use App\Http\Controllers\Api\V1\RoleApiController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => ['auth:api']], function () {
    Route::resource('roles', RoleApiController::class)->except(['create', 'edit']);
    Route::resource('actions', ActionApiController::class)->only(['index']);
});
