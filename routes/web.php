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

Route::get('/', function () {
    return view('welcome');
});

//Dashboard
Route::get('/dashboard' ,"DashboardController@Index");

//Categories
Route::post('/categories/save' , "CategoriesController@Save");
Route::get('/categories', "CategoriesController@Index");


//Customers
Route::post('/customers/save' , "CustomersController@Save");
Route::get('/customers', "CustomersController@Index");
//Route::get('/customers/read', "CustomersController@Index");


//Products
Route::post('/products/save' , "ProductsController@Save");
Route::get('/products', "ProductsController@Index");


//Sales
Route::post('/sales/save' , "SalesController@Save");
Route::get('/sales/read', "SalesController@Index");



