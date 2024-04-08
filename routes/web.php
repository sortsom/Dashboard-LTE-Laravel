<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('departments.ResourceOfficer.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/resoureofficer', [App\Http\Controllers\HomeController::class, 'index'])->name('departments.addhr');
