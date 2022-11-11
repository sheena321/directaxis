<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller1;

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
route::view('insert','insert');
route::post('insert',[App\Http\Controllers\controller1::class,'insertion']);
route::view('showall','showall');
route::get('showall',[App\Http\Controllers\controller1::class,'showall']);
route::get('delete/{id}',[App\Http\Controllers\controller1::class,'del']);
route::get('update/{id}',[App\Http\Controllers\controller1::class,'update']);
route::post('update1/{id}',[App\Http\Controllers\controller1::class,'update_new']);
