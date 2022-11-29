<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\curdController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ArticleController::class,"index"])->name('home')->middleware(['auth']);

Route::get('/login',[ArticleController::class,"getlogin"])->name("login");

Route::get('/register',[ArticleController::class,"getregister"])->name("register");

Route::post('/register',[ArticleController::class,"dataregister"]);

Route::post('/login',[ArticleController::class,"loginauth"])->name('loginauth');

Route::post('/logout',[ArticleController::class,"logouthandle"])->name('logout');

Route::post('/create',[curdController::class,"create"])->name('create');

Route::get('/viewtable',[curdController::class,"viewtable"])->name("viewtable")->middleware(['auth']);

Route::get('/delete/{id}', [curdController::class,'deletedata']);

Route::get('/edit/{id}', [curdController::class,'editdata'])->middleware(['auth']);

Route::post('/update',[curdController::class,"update"])->name('update');





