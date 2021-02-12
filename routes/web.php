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

// Route::middleware('auth')->group(function() {

    Route::get('/', 'HomePageController@getAllProducts');
    Route::get('filtered-products', 'HomePageController@getFilteredProducts');
    Route::get('/create-product', 'CreateProductController@getCreateProductPage');
    Route::get('/create-news', 'CreateNewsController@getCreateNewsPage');
    Route::get('/profile', 'ProfileController@getProfilePage');
    Route::get('/news', 'NewsController@getNewsPage');
    Route::get('/product/{id}', 'ProductController@getProduct');
    Route::get('/categories', 'CategoriesController@getCategories');
    Route::get('/users-list', 'UsersListController@getUsers');
    Route::get('/users-list/edit-user/{id}', 'EditUserController@getUserInfo');
    Route::get('/my-developments', 'MyDevelopmentsController@getDeveloperProducts');
    Route::get('/products-library', 'ProductsLibraryController@getProducts');
    Route::get('/statistics', 'StatisticController@getStatistic');
    Route::get('/developers-requests', 'DevelopersRequestsController@getRequests');
    Route::get('/groups-list', "GroupsListController@getGroups");
    Route::get('/journal/{id}', 'JournalController@getRelises');
    Route::get('/download-release/{id}', "ReleaseFileController@download");

    Route::post('/categories', 'CategoriesController@postCategory');
    Route::post('/users-list/edit-user/{id}', 'EditUserController@updateUserInfo');
    Route::post('/create-news', 'CreateNewsController@createNews');
    Route::post('/upload-release', "ReleaseFileController@upload");
    Route::post('/upload-product-photo', "ProductController@uploadPhoto");
// });

Route::get('/login', 'LoginController@getLoginPage')->name('login');
Route::post('/login-attempt', 'LoginController@authenticate')->name('login');
