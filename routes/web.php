<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Projects\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProjectController::class,'index']);

Route::get('/create',[ProjectController::class,'create']);

Route::post('/store',[ProjectController::class,'store']);

Route::get('/edit/{id}',[ProjectController::class,'edit']);

Route::put('/update/{id}',[ProjectController::class,'update']);

Route::get('/delete/{id}',[ProjectController::class,'destroy']);

// Route::get('/show',[ProjectController::class,'show']);

Route::get('/master', function(){
    return view('master.master');
});



