<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;


//Route::get('dishes',[DishController::class, 'index'])->name('dish.index');
//Route::get('dishes/edit',[DishController::class, 'edit'])->name('dish.edit');
//Route::get('dishes/show',[DishController::class, 'show'])->name('dish.show');
//Route::get('dishes/create',[DishController::class, 'create'])->name('dish.create');
//Route::get('dishes/destroy',[DishController::class, 'destroy'])->name('dish.destroy');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('dish',DishController::class);

Route::resource('product',ProductController::class);

Auth::routes();
