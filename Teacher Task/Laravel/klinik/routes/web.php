<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

Route::get('/',[HomeController::class,'index'])->name("home.index");
Route::get('/about',[AboutController::class,'index'])->name("about.index");
Route::get('/service',[ServiceController::class,'index'])->name("service.index");
Route::get('/feature',[PagesController::class,'feature'])->name("pages.feature");
Route::get('/team',[PagesController::class,'team'])->name("pages.team");
Route::get('/appoint',[PagesController::class,'appoint'])->name("pages.appoint");
Route::get('/testimonal',[PagesController::class,'testimonal'])->name("pages.testimonal");
Route::get('/error',[PagesController::class,'error'])->name("pages.error");
Route::get('/contact',[ContactController::class,'index'])->name("contact.index");
