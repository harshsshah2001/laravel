<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\userauthentication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\condition;

// register routes
Route::get('/register',[Usercontroller::class,'showForm'])->name('showregisterform');
Route::post('/register',[Usercontroller::class,'registerdata'])->name('contact.store');

// display all user details
Route::get('/details',[Usercontroller::class,'showContacts'])->name('showdetails');

// edite user routes
Route::get('/update/{id}/edit',[Usercontroller::class,'updateformshow'])->name('updateform');
Route::put('/update/{id}',[Usercontroller::class,'updatedata'])->name('posts.update');

//delete user route
Route::delete('/delete/{id}', [Usercontroller::class, 'deleteData'])->name('data.destroy');
Route::get('/show_data',[Usercontroller::class,'showContacts'])->name('show_all_data');

//Delete Multiple Records
Route::post('delete-multi', [UserController::class, 'deletemultiple'])->name('delete-multi');

//search Route
Route::get('/search',[Usercontroller::class,'searchdata']);

//login Route
Route::get('/login',[Usercontroller::class,'loginpage'])->name('login');
Route::post('/login1',[Usercontroller::class,'loginsubmit'])->name('login.submit');

//Home Route
Route::get('/home', [UserController::class, 'homes'])->name('homed');

//For check API route
Route::get('/api_check',[Usercontroller::class,'api']);

Route::middleware(['auth'])->group(function () {

 Route::get('/landing_here',[Usercontroller::class,'landing']);

});

//it is used for localization.
Route::view('/welcome', 'welcome');

