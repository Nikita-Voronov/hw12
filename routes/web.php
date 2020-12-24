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
//Navbar routes
Route::get('/', 'WelcomeController@PageWelcome');
Route::get('/contacts', 'ContactsController@PageContacts');
Route::get('/about', 'AboutController@PageAbout');
Route::get('/products', 'ProductsController@PageProducts');
Route::get('/cart', 'CartController@PageCart');
//Product category

Route::get('/category_1', 'CategoryController@PageCategory_1');
Route::get('/category_2', 'CategoryController@PageCategory_2');
Route::get('/category_3', 'CategoryController@PageCategory_3');
Route::get('/category_4', 'CategoryController@PageCategory_4');
Route::get('/category_5', 'CategoryController@PageCategory_5');

//Product
Route::get('/product_id=1', 'ProductController@PageProduct_id1');
Route::get('/product_id=2', 'ProductController@PageProduct_id2');
Route::get('/product_id=3', 'ProductController@PageProduct_id3');
Route::get('/product_id=4', 'ProductController@PageProduct_id4');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/logout', 'LogoutController@logout')->name('logout');
