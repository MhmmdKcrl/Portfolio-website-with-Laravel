<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;

#Route::view('/','index'); 
#Route::view('/user','user'); 
Route::get('/',[MainController::class,'indexx'])->name('home');
Route::get('/user6',[UserController::class,'user6'])->name('user6');
Route::get('/user5',[UserController::class,'user5'])->name('user5');
Route::get('/user3',[UserController::class,'user3'])->name('user3');
Route::get('/user4',[UserController::class,'user4'])->name('user4');
Route::get('/user2',[UserController::class,'user2'])->name('user2');
Route::get('/user1',[UserController::class,'user1'])->name('user1');



        
        