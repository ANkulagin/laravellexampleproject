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
Route::post('/workers',[WorkerController::class,"store"])->name('worker.store');
Route::get('/workers/delete',[WorkerController::class,"delete"])->name('worker.delete');
Route::get('/workers/update',[WorkerController::class,"update"])->name('worker.update');
