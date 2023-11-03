<?php

use App\Http\Controllers\SubTaskController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Projects\ProjectController;

=======
use App\Http\Controllers\MainTestController;
>>>>>>> 20827a3db893eb640b82fccc299a57eb494515d4
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

<<<<<<< HEAD
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
=======
// Route::get('main-test/', function () {
//     return view('mainTest.index');
// });


// Route::get('main-test/create', function () {
//     return view('mainTest.create');
// });

// Route::get('main-test/edit', function () {
//     return view('mainTest.edit');
// });

// Route::get('/', function () {
//     return view('master.master');
// });


Route::get('/main-test',[MainTestController::class,'index'])->name('main');
Route::get('main-test/create',[MainTestController::class,'create'])->name('main-create');
Route::post('/main-test',[MainTestController::class,'store'])->name('main-store');
Route::get('/main-test/{id}',[MainTestController::class,'show'])->name('main-show');
Route::get('/main-test/{id}/edit',[MainTestController::class,'edit'])->name('main-edit');
Route::put('/main-test/{id}',[MainTestController::class,'update'])->name('main-update');
Route::delete('/main-test/{id}',[MainTestController::class,'destroy'])->name('main-delete');


Route::get('sub-task/', [SubTaskController::class, 'index']);
Route::get('sub-task/create', [SubTaskController::class, 'create']);
Route::post('sub-task/create', [SubTaskController::class, 'store']);
Route::get('/sub-task/{id}', [SubTaskController::class,'edit']);
Route::post('/sub-task/{id}', [SubTaskController::class,'update']);
Route::get('/sub-task/delete/{id}', [SubTaskController::class,'destroy']);
// Route::resource('subtask',SubTaskController::class);

>>>>>>> 20827a3db893eb640b82fccc299a57eb494515d4



