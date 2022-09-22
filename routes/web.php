<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-customer',[CustomerController::class,'index']);
Route::post('/store-customer',[CustomerController::class,'store'])->name('store.customer');
Route::get('/add-mobile',[MobileController::class,'index']);
Route::post('/store-mobile',[MobileController::class,'store'])->name('store.mobile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
