<?php

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

Route::get('/', 'HomePageController@invoke');

Route::get('/create-product', CreateProductController::class);

Route::get('/create-news', 'CreateNewsController@invoke');

Route::get('/profile', ProfileController::class);

Route::get('/news', NewsController::class);

Route::get('/categories', 'CategoriesController@getCategories');

Route::post('/categories', 'CategoriesController@postCategory');

Route::post('/create-news', 'CreateNewsController@insertNews');


