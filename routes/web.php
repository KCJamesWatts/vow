<?php

use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dataforged/truths', [TestController::class, 'index'])
    ->name('dataforged.truths.index');
