<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientSideController;

// Client Side Routes 
Route::get('/', [ClientSideController::class,'index'])->name('home');
Route::get('/blog',[ClientSideController::class,'blog'])->name('blog');
Route::get('/contact',[ClientSideController::class,'contact'])->name('contact');
Route::get('/userLogin',[ClientSideController::class,'login'])->name('login');
Route::get('/userSignUp',[ClientSideController::class,'signUp'])->name('signUp');
// Client Side Data Routes 
Route::post('/userSignUp',[ClientSideController::class,'signUpData'])->name('signUpData');
Route::post('/userLogin',[ClientSideController::class,'loginData'])->name('loginData');

// Email Verification Link 
Route::get('/emailVerify/{email}',[ClientSideController::class,'emailVerify']);
// Email Remove Link 
Route::get('/emailRemove/{email}',[ClientSideController::class,'emailRemove']);



// Logout Route 
Route::get('/logout',[ClientSideController::class,'logout'])->name('logout');

Route::get('/dashboard/login', function () {
    return view('dashboard.adminlogin');
});
Route::get('/dashboard/home', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/create', function () {
    return view('dashboard.createpost');
});
