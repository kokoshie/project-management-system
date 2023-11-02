<?php

use Illuminate\Support\Facades\Route;

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

Route::get('main-test/', function () {
    return view('mainTest.index');
});

Route::get('main-test/create', function () {
    return view('mainTest.create');
});

Route::get('main-test/edit', function () {
    return view('mainTest.edit');
});

Route::get('/', function () {
    return view('master.master');
});



