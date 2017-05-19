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

Route::group(['prefix' => 'administrator'], function () {
    Route::get('dashboard', ['as' => 'admin_dashboard', 'uses' => 'PageAdmin\DashboardController@index']);

    Route::group(['prefix' => 'category'], function () {
        Route::get('list', ['as' => 'category_list', 'uses' => 'PageAdmin\CategoryController@index']);
        Route::get('insert', ['as' => 'category_get_insert', 'uses' => 'PageAdmin\CategoryController@showFormInsert']);
        Route::post('insert', ['as' => 'category_post_insert', 'uses' => 'PageAdmin\CategoryController@insert']);
        Route::get('update/{id}', ['as' => 'category_get_update', 'uses' => 'PageAdmin\CategoryController@showFormUpdate']);
        Route::post('update/{id}', ['as' => 'category_post_update', 'uses' => 'PageAdmin\CategoryController@update']);
        Route::get('delete/{id}', ['as' => 'category_get_delete', 'uses' => 'PageAdmin\CategoryController@delete']);
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