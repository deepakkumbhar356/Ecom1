<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Student3Controller;


Route::get('/',[StudentsController::class, 'index'])->name('index');
Route::post('/',[StudentsController::class, 'create'])->name('create'); 
Route::get('/edit/{id}',[StudentsController::class, 'edit'])->name('edit'); 
Route::put('/edit/{id}',[StudentsController::class, 'update'])->name('update'); 
Route::get('/delete/{id}',[StudentsController::class, 'destroy'])->name('destroy'); 

//OOORRRMm CRRUUDD PRRAAAACCTTCCCCC


Route::get('/',[Student3Controller::class, 'index'])->name('index');
Route::post('/',[Student3Controller::class, 'create'])->name('create');
Route::get('/edit/{id}',[Student3Controller::class, 'edit'])->name('edit');
Route::put('/edit/{id}',[Student3Controller::class, 'update'])->name('update');
Route::get('/delete/{id}',[Student3Controller::class, 'destroy'])->name('delete');