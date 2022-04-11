<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::prefix('/games')->group(function () {
    Route::get('/', [GameController::class, 'index']);
    Route::post('/', [GameController::class, 'store']);
});
