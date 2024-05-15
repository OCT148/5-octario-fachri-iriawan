<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/services', [App\Http\Controllers\PagesController::class, 'services'])->name('services');;

Route::get('/services/build', [App\Http\Controllers\PagesController::class, 'build'])->name('services.build');;

Route::get('/services/repair', [App\Http\Controllers\PagesController::class, 'repair'])->name('services.repair');;

Route::get('/services/upgrade', [App\Http\Controllers\PagesController::class, 'upgrade'])->name('services.upgrade');;
