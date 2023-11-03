<?php

use App\Http\Controllers\SubTaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainTestController;
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

// Route::get('main-test/', function () {
//     return view('mainTest.index');
// });

<<<<<<< HEAD
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

=======
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
>>>>>>> c2fb1847ea2a1465b590be87b2590eeb56add359



