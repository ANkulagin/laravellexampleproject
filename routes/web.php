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

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Список работников
Route::get('/workers', [WorkerController::class, "index"])->name('worker.index');

// Форма создания нового работника
Route::get('/workers/create', [WorkerController::class, "create"])->name('worker.create');

// Просмотр информации о работнике
Route::get('/workers/{worker}', [WorkerController::class, "show"])->name('worker.show');

// Форма редактирования информации о работнике
Route::get('/workers/{worker}/edit', [WorkerController::class, 'edit'])->name('worker.edit');

// Удаление работника
Route::delete('/workers/{worker}', [WorkerController::class, "delete"])->name('worker.delete');

// Создание нового работника
Route::post('/workers', [WorkerController::class, "store"])->name('worker.store');

// Обновление информации о работнике
Route::patch('/workers/{worker}', [WorkerController::class, "update"])->name('worker.update');
