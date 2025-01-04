<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'myhome']);

Route::get('/home', [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_food', [AdminController::class,'add_food']);
Route::post('/upload_food',[AdminController::class,'upload_food']);

Route::get('/view_food', [AdminController::class,'view_food']);

Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
