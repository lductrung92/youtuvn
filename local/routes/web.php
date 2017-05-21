<?php

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




/*
 * Starting of PageAdmin
*/

Route::get('administrator/login', ['as' => 'admin_get_login', 'uses' => 'AuthAdmin\AuthController@showFormLogin']);
Route::post('administrator/login', ['as' => 'admin_post_login', 'uses' => 'AuthAdmin\AuthController@login']);

Route::group(['prefix' => 'administrator', 'middleware' => 'is.admin'], function () {

    Route::get('logout', ['as' => 'admin_get_logout', 'uses' => 'AuthAdmin\AuthController@logout']);

    Route::get('dashboard', ['as' => 'admin_dashboard', 'uses' => 'PageAdmin\DashboardController@index']);

    Route::group(['prefix' => 'category'], function () {
        Route::get('list', ['as' => 'category_list', 'uses' => 'PageAdmin\CategoryController@index']);
        Route::get('insert', ['as' => 'category_get_insert', 'uses' => 'PageAdmin\CategoryController@showFormInsert']);
        Route::post('insert', ['as' => 'category_post_insert', 'uses' => 'PageAdmin\CategoryController@insert']);
        Route::get('update/{id}', ['as' => 'category_get_update', 'uses' => 'PageAdmin\CategoryController@showFormUpdate']);
        Route::post('update/{id}', ['as' => 'category_post_update', 'uses' => 'PageAdmin\CategoryController@update']);
        Route::get('delete/{id}', ['as' => 'category_get_delete', 'uses' => 'PageAdmin\CategoryController@delete']);
    });

    Route::group(['prefix' => 'youtube'], function () {
        Route::get('list', ['as' => 'youtube_list', 'uses' => 'PageAdmin\VideoController@index']);
        Route::get('insert', ['as' => 'youtube_get_insert', 'uses' => 'PageAdmin\VideoController@showFormInsert']);
        Route::post('insert', ['as' => 'youtube_post_insert', 'uses' => 'PageAdmin\VideoController@insert']);
        Route::get('update/{id}', ['as' => 'youtube_get_update', 'uses' => 'PageAdmin\VideoController@showFormUpdate']);
        Route::post('update/{id}', ['as' => 'youtube_post_update', 'uses' => 'PageAdmin\VideoController@update']);
        Route::get('delete/{id}', ['as' => 'youtube_get_delete', 'uses' => 'PageAdmin\VideoController@delete']);

        Route::get('get_data_video/{url}', ['as' => 'get_data_youtube', 'uses' => 'PageAdmin\VideoController@getDataVideo']);
    });

    Route::group(['prefix' => 'role'], function () {
        Route::get('list', ['as' => 'role_list', 'uses' => 'PageAdmin\RoleController@index']);
        Route::get('insert', ['as' => 'role_get_insert', 'uses' => 'PageAdmin\RoleController@showFormInsert']);
        Route::post('insert', ['as' => 'role_post_insert', 'uses' => 'PageAdmin\RoleController@insert']);
        Route::get('update/{id}', ['as' => 'role_get_update', 'uses' => 'PageAdmin\RoleController@showFormUpdate']);
        Route::post('update/{id}', ['as' => 'role_post_update', 'uses' => 'PageAdmin\RoleController@update']);
        Route::get('delete/{id}', ['as' => 'role_get_delete', 'uses' => 'PageAdmin\RoleController@delete']);
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', ['as' => 'user_list', 'uses' => 'PageAdmin\UserController@index']);
        Route::get('insert', ['as' => 'user_get_insert', 'uses' => 'PageAdmin\UserController@showFormInsert']);
        Route::post('insert', ['as' => 'user_post_insert', 'uses' => 'PageAdmin\UserController@insert']);
        Route::get('update/{id}', ['as' => 'user_get_update', 'uses' => 'PageAdmin\UserController@showFormUpdate']);
        Route::post('update/{id}', ['as' => 'user_post_update', 'uses' => 'PageAdmin\UserController@update']);
        Route::get('delete/{id}', ['as' => 'user_get_delete', 'uses' => 'PageAdmin\UserController@delete']);

        Route::get('profile', ['as' => 'user_profile', 'uses' => 'PageAdmin\UserController@profile']);
    });
});


/*
 * Starting of PageMember
*/
Route::group(['prefix' => 'member'], function () {
    Route::get('dashboard', ['as' => 'member_dashboard', 'uses' => 'PageMember\DashboardController@index']);
});


/*
 * Starting of PageHome
*/

Route::group(['prefix' => '/'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'PageHome\HomeController@index']);
});