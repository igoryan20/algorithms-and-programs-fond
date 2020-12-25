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

Route::get('/product/{id}', 'ProductController@getProduct');

Route::get('/categories', 'CategoriesController@getCategories');

Route::post('/categories', 'CategoriesController@postCategory');

Route::get('/users-list', 'UsersListController@getUsers');

Route::get('/users-list/edit-user/{id}', 'EditUserController@getUserInfo');

Route::post('/users-list/edit-user/{id}', 'EditUserController@updateUserInfo');

Route::post('/create-news', 'CreateNewsController@insertNews');

Route::get('/my-developments', 'MyDevelopmentsController@getPrograms');

Route::get('/products-library', 'ProductsLibraryController@getProducts');

Route::get('/statistics', 'StatisticController@getStatistic');
