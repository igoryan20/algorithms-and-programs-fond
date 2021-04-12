<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomePageController@getAllProducts')->name('home');
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
    Route::get('/journal/{id}', 'JournalController@getRelises')->name('journal');
    Route::get('/download-release/{id}', "ReleaseFileController@download");
    Route::get('/permissions', 'PermissionsPageController@getPermissions');
    Route::get('/desired-products', 'DesiredProductsController@getDesiredProducts');
    Route::get('/new-products', 'NewProductsController@getNewProducts');
    Route::get('/publish/{id}', 'ProductController@publish');
    Route::get('/desired-product-users/{product_id}', 'DesiredProductUserController@getUsers');
    Route::get('/download-releases/{id}', "ReleaseFileController@getReleases");
    Route::get('/getCurrentUserId', function() {
        return Auth::user();
    });

    Route::post('/categories', 'CategoriesController@postCategory');
    Route::post('/create-contacts', 'ProfileController@createContacts');
    Route::post('/update-contacts', 'ProfileController@updateContacts');
    Route::post('/update-fullname', 'ProfileController@updateUserFullName');
    Route::post('/users-list/edit-user/{id}', 'EditUserController@updateUserInfo');
    Route::post('/update-user-avatar', 'ProfileController@updateUserAvatar');
    Route::post('/create-news', 'CreateNewsController@createNews');
    Route::post('/upload-release', "ReleaseFileController@upload");
    Route::post('/upload-product-photo', "ProductController@uploadPhoto");
    Route::post('/product/{id}', 'ProductController@updateDesireProductTable');
    Route::post('/create-product', 'CreateProductController@postNewProduct');
    Route::post('/update-product-description/{id}', 'ProductController@updateProductDescription');
    Route::post('/delete-product/{id}', 'ProductController@deleteProduct');
    Route::post('/publish-release/{product_id}/{release_id}', 'ReleaseFileController@publish');
});

Route::get('/login', 'LoginController@getLoginPage')->name('login');
Route::post('/login-attempt', 'LoginController@authenticate')->name('loginAuth');
Route::get('/logout', 'LogoutController@logout');
