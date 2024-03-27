<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
Route::get('/dashboard/add',[HomeController::class,'add'])->name('add');
Route::post('/dashboard/submit',[HomeController::class,'insert'])->name('submit');


require __DIR__.'/auth.php';
