<?php

use Illuminate\Support\Facades\Route;
use App\Models\{
    User,
    Category
};
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
    Route::get('fap/', function() {
        return redirect('fap/all-products');
    });
    Route::get('fap/all-products', 'ProductsController@getAllProductsPage')
            ->middleware('hasRights');
    Route::get('fap/published-products', 'ProductsController@getPublishedProductsPage');
    Route::get('fap/create-product', 'CreateProductController@getCreateProductPage');
    Route::get('fap/create-news', 'CreateNewsController@getCreateNewsPage');
    Route::get('fap/profile', 'ProfileController@getProfilePage')->name('profile');
    Route::get('fap/news', 'NewsController@getNewsPage');
    Route::get('fap/product/{id}', 'ProductController@getProduct');
    Route::get('fap/categories', 'CategoriesController@getCategories');
    Route::get('fap/users-list', 'UsersListController@getUsers');
    Route::get('fap/users-list/edit-user/{id}', 'EditUserController@getUserInfo');
    Route::get('fap/my-developments', 'MyDevelopmentsController@getDeveloperProducts');
    Route::get('fap/products-library', 'ProductsLibraryController@getProducts');
    Route::get('fap/statistics', 'StatisticController@getStatistic');
    Route::get('fap/developers-requests', 'DevelopersRequestsController@getRequests');
    Route::get('fap/groups-list', "GroupsListController@getGroups");
    Route::get('fap/journal/{id}', 'JournalController@getRelises')->name('journal');
    Route::get('fap/download-release/{id}', "ReleaseFileController@download");
    Route::get('fap/permissions', 'PermissionsPageController@getPermissions');
    Route::get('fap/desired-products', 'DesiredProductsController@getDesiredProducts');
    Route::get('fap/new-products', 'ProductsController@getNewProductsPage');
    Route::get('fap/desired-product-users/{product_id}', 'DesiredProductUserController@getUsers');
    Route::get('fap/download-releases/{id}', "ReleaseFileController@getReleases");
    Route::get('fap/getCurrentUserId', function() {
        return Auth::user();
    });

    Route::post('fap/categories', 'CategoriesController@postCategory');
    Route::post('fap/create-contacts', 'ProfileController@createContacts');
    Route::post('fap/update-contacts', 'ProfileController@updateContacts');
    Route::post('fap/update-fullname', 'ProfileController@updateUserFullName');
    Route::post('fap/users-list/edit-user/{id}', 'EditUserController@updateUserInfo');
    Route::post('fap/update-user-avatar', 'ProfileController@updateUserAvatar');
    Route::post('fap/create-news', 'CreateNewsController@createNews');
    Route::post('fap/upload-release', "ReleaseFileController@upload");
    Route::post('fap/upload-product-photo', "ProductController@uploadPhoto");
    Route::post('fap/product/{id}', 'ProductController@updateDesireProductTable');
    Route::post('fap/create-product', 'CreateProductController@postNewProduct');
    Route::post('fap/update-product-description/{id}', 'ProductController@updateProductDescription');
    Route::post('fap/delete-product/{id}', 'ProductController@deleteProduct');
    Route::post('fap/publish-release/{product_id}/{release_id}', 'ReleaseFileController@publish');
    Route::post('fap/create-request/{id}', 'DevelopersRequestsController@createRequest');

    foreach(Category::all() as $category) {
        Route::get('fap/categories/'.$category->url, 'ProductsController@getCategoryProducts');
    }

});

Route::get('fap/login', 'LoginController@getLoginPage')->name('login');
Route::post('fap/login-attempt', 'LoginController@authenticate')->name('loginAuth');
Route::get('fap/logout', 'LogoutController@logout');
