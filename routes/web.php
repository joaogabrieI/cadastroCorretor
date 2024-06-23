<?php

use App\Http\Controllers\RealtorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('realtors.index');
});

Route::resource('realtors', RealtorController::class);
