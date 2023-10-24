<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/users', function () {
    return view('user.index');
});


Route::get('/admin/projects',function(){
    return view('Project.index');
});

Route::get('/admin/tasks',function(){
    return view('Task.index');
});


Route::get('/user/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
