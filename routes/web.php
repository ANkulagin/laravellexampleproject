<?php

use App\Http\Controllers\WorkerController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/workers',[WorkerController::class,"index"])->name('worker.index');
Route::get('/workers/create',[WorkerController::class,"create"])->name('worker.create');
Route::get('/workers/{worker}',[WorkerController::class,"show"])->name('worker.show');
Route::get('/workers/{worker}/edit',[WorkerController::class,'edit'])->name('worker.edit');
Route::delete('/workers/{worker}',[WorkerController::class,"delete"])->name('worker.delete');
Route::post('/workers',[WorkerController::class,"store"])->name('worker.store');
Route::patch('/workers/{worker}',[WorkerController::class,"update"])->name('worker.update');

