<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['json.response']], function () {
    Route::post('/register',[RegisterController::class,'register']);
});

