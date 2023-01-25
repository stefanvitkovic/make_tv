<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\AppController;

Route::prefix('v1')->group(function () {

    Route::get('/apps',[AppController::class,'index']);

});