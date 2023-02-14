<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterfacesController;

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
Route::get('/Interfaces/loging',[InterfacesController::class,'loging'])->name('Interfaces.loging');
Route::get('/Interfaces/ConfigurationPage',[InterfacesController::class,'ConfigurationPage'])->name('Intefaces.ConfigurationPage');
Route::get('/Interfaces/Tables',[InterfacesController::class,'Tables'])->name('Intefaces.Tables');
Route::get('/Interfaces/smth',[InterfacesController::class,'smth'])->name('Intefaces.smth');
Route::get('/Interfaces/smth2',[InterfacesController::class,'smth2'])->name('Intefaces.smth2');