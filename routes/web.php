<?php

use App\Http\Controllers\DishController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\UfmController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('dishes', DishController::class)->middleware('auth')->name('index', 'dishes.index')->name('edit', 'dishes.edit');
Auth::routes();

Route::resource('ufm',UfmController::class)->middleware('auth')->name('index', 'ufm.index');

Route::resource('producttypes',ProductTypeController::class)->middleware('auth')->name('index', 'producttypes.index')->name('edit', 'producttypes.edit');

Route::resource('products',ProductController::class)->middleware('auth')->name('index', 'products.index');

Route::resource('typeofdish',\App\Http\Controllers\TypeOfDishController::class)->middleware('auth')->name('index', 'typeofdish.index');

Route::resource('months',\App\Http\Controllers\MonthController::class)->middleware('auth')->name('index', 'months.index');

Route::resource('menutypes',\App\Http\Controllers\MenuTypeController::class)->middleware('auth')->name('index', 'menutypes.index');

//Route::resource('productsbydish',\App\Http\Controllers\ProductsByDishController::class);


Route::resource('menu', \App\Http\Controllers\MenuController::class)->middleware('auth')->name('index', 'menu.index');

