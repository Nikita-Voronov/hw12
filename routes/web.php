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
Route::get('/', 'WelcomeController@PageWelcome')->name('welcome');
Route::get('/contacts', 'ContactsController@PageContacts')->name('Contacts');
Route::get('/about', 'AboutController@PageAbout')->name('About');
Route::get('/products', 'ProductsController@PageProducts')->name('Products');
Route::get('/cart', 'CartController@PageCart')->name('Cart');
//Product category

Route::get('/category_1', 'CategoryController@PageCategory_1')->name('Category_1');
Route::get('/category_2', 'CategoryController@PageCategory_2')->name('Category_2');
Route::get('/category_3', 'CategoryController@PageCategory_3')->name('Category_3');
Route::get('/category_4', 'CategoryController@PageCategory_4')->name('Category_4');
Route::get('/category_5', 'CategoryController@PageCategory_5')->name('Category_5');

//Product
Route::get('/product_id=1', 'ProductController@PageProduct_id1')->name('Product_id1');
Route::get('/product_id=2', 'ProductController@PageProduct_id2')->name('Product_id2');
Route::get('/product_id=3', 'ProductController@PageProduct_id3')->name('Product_id3');
Route::get('/product_id=4', 'ProductController@PageProduct_id4')->name('Product_id4');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/logout', 'LogoutController@logout')->name('logout');
