<?php

use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

Route::get('/','App\Http\Controllers\ContactCotrollers@index');
Route::get('/create', 'App\Http\Controllers\ContactCotrollers@create');
Route::post('/store','App\Http\Controllers\ContactCotrollers@store');
Route::post('/edit/{id}' , 'App\Http\Controllers\ContactCotrollers@edit');
Route::post('/update/{id}','App\Http\Controllers\ContactCotrollers@update');
Route::post('/delete/{id}' ,'App\Http\Controllers\ContactCotrollers@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
