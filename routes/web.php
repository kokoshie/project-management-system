<?php

use App\Http\Controllers\SubTaskController;
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
Route::get('sub-task/', [SubTaskController::class, 'index']);
Route::get('sub-task/create', [SubTaskController::class, 'create']);
Route::post('sub-task/create', [SubTaskController::class, 'store']);
Route::get('/sub-task/{id}', [SubTaskController::class,'edit']);
Route::post('/sub-task/{id}', [SubTaskController::class,'update']);
Route::get('/sub-task/delete/{id}', [SubTaskController::class,'destroy']);
// Route::resource('subtask',SubTaskController::class);



