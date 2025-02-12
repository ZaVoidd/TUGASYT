<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return "hello wordl";
// });

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');


Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/user',[HomeController::class,'index'])->name('index');
Route::get('/create',[HomeController::class,'create'])->name('user.create');
Route::post('/store',[HomeController::class,'store'])->name('user.store');

Route::get('/edit/{id}',[HomeController::class,'edit'])->name('user.edit');
Route::put('/update/{id}',[HomeController::class,'update'])->name('user.update');

Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('user.delete');

