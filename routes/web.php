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
// showing item Start for home
Route::get('/','HomeController@index');
Route::get('/category/{id}','HomeController@show');
Route::get('/cart/{id}/detail','HomeController@showDetail');
Route::get('car/{id}/add-cart','HomeController@add');
Route::get('car/show-cart','HomeController@showCart');
Route::get('car/checkout','HomeController@checkOut');
// showing item End for home

Route::get('users/register','Auth\RegisterController@show');
Route::post('users/register','Auth\RegisterController@register');
Route::get('users/logout','Auth\LoginController@logout');
Route::get('users/login','Auth\LoginController@show');
Route::post('/','Auth\LoginController@login');// i am workin in home page. so forward slap;

//Admin or backend Start
Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'manager'],function(){
    Route::get('admin','AdminController@index');// FIrst

    Route::get('users','UserController@index');//First
    Route::get('users/{id}/edit','UserController@edit');///third coz we have role already
    Route::post('users/{id}/edit','UserController@update');//Define a real user ROle
    
    Route::get('roles/create','RoleController@create');//second
    Route::post('roles/create','RoleController@store');//second
    //rest for role
    //Category start here
    Route::get('category/create','CategoryController@create');
    Route::post('category/create','CategoryController@store');
    Route::get('category','CategoryController@index');
    Route::get('category/{id}/edit','CategoryController@edit');
    Route::post('category/{id}/edit','CategoryController@update');
    Route::get('category/{id}/delete','CategoryController@destroy');

    // Car start here
    Route::get('car/create','CarController@create');
    Route::post('car/create','CarController@store');
    Route::get('car','CarController@index');
    Route::get('car/{id}/edit','CarController@edit');
    Route::post('car/{id}/edit','CarController@update');
    Route::get('car/{id}/delete','CarController@destroy');
});
//Admin or backend End

