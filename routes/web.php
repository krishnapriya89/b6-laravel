<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

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
Route::view('example','exam');
#to controller
Route::get('alpha',[mycontroller::class,'function1'] );