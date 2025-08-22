<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('task', function () {
//     return view('Task');
// });


Route::get('task', [TaskController::class, 'index'])->name('task');

Route::post('saveTask',[TaskController::class,'save']);

Route::get('markAsCompleted/{id}',[TaskController::class,'updateTask'])->name('markAsCompleted');// button update

Route::get('markAsNotComplete/{id}',[TaskController::class,'markAsNotComplete'])->name('markAsNotComplete');
Route::get('delete/{id}',[TaskController::class,'destroy'])->name('delete');

Route::get('delete/{id}',[TaskController::class,'destroy'])->name('delete');
Route::get('edit/{id}',[TaskController::class,'Updateview'])->name('edit');

Route::post('updatetask',[TaskController::class,'update'])->name('updatetask');