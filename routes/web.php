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

Route::get('/',  'SiteController@index');
Route::get('/custom-order', function() {
    return view('customer-pages.index');
    
});


Route::get('/Reports/orders', 'ReportsController@orders');
Route::get('/Reports/customers', 'ReportsController@customers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//customerside
Route::get('/products/list',"ProductsController@productlist");
Route::get('/orders/list', "OrdersController@orderlist");
Route::get('/payments/list',"PaymentsController@paymentslist");

Route::get('/search/find/{id}', "SearchController@FindByCategory");
Route::get('/orders/cart', "OrdersController@cart");
Route::get('/orders/add-cart/{id}', "OrdersController@addToCart");
Route::get('/orders/cart/empty', "OrdersController@emptyCart");
Route::get('/cart/remove/{id}','OrdersController@removeItem');
Route::get('/cart/checkout', 'OrdersController@checkout');
Route::get('/cakes/index', "CakesController@index");
Route::post('/cakes/save', "CakesController@save");



////////////////////////////////////////// admin routes //////////////////////////////////////

Route::group(['namespace' => 'Admin', 'prefix'=>'admin'], function() {

    Route::get('/dashboard' ,"DashboardController@Index");

    //Categories
    Route::post('/categories/save' , "CategoriesController@Save");
    Route::get('/categories', "CategoriesController@Index");
    Route::get('/categories/create',"CategoriesController@create");
    Route::get('/categories/edit/{id}', "CategoriesController@edit");
    Route::post('/categories/update/{id}',"CategoriesController@update");
    Route::get('/categories/delete/{id}', "CategoriesController@delete");
    Route::get('/categories/getall', "CategoriesController@GetCat");
    Route::get('/categories/getcategoriesdetail', "CategoriesController@GetCategoriesDetail");

    //Customers
    Route::post('/customers/save' , "CustomersController@Save");
    Route::get('/customers', "CustomersController@Index");
    Route::get('/customers/create', "CustomersController@create");
    Route::get('/customers/edit/{id}', "CustomersController@edit");
    Route::post('/customers/update/{id}', "CustomersController@update");
    Route::get('/customers/delete/{id}', "CustomersController@delete");
    Route::get('/customers/getall', "CustomersController@GetCus");
    Route::get('/customers/getcustomersdetail', "CustomersController@GetCustomersDetail");

    
    //Products
    Route::post('/products/save' , "ProductsController@Save");
    Route::get('/products', "ProductsController@Index");
    Route::get('/products/create', "ProductsController@create");
    Route::get('/products/edit/{id}', "ProductsController@edit");
    Route::post('/products/update/{id}', "ProductsController@update");
    Route::get('/products/delete/{id}', "ProductsController@delete");
    Route::get('/products/getall', "ProductsController@GetProducts");
    Route::get('/products/getproductsdetail', "ProductsController@GetProductsDetail");
    Route:: post('/products/uploadfile', "ProductsController@uploadfile");

    
    //Sales
    Route::post('/sales/save' , "SalesController@Save");
    Route::get('/sales', "SalesController@Index");
    Route::get('/sales/detail/{id}', "SalesController@Detail");
    Route::get('/sales/create', "SalesController@create");
    Route::get('/sales/edit/{id}', "SalesController@edit");
    Route::post('/sales/update/{id}', "SalesController@update");
    Route::get('/sales/delete/{id}', "SalesController@delete");
    Route::get('/sales/getall', "SalesController@GetSal");

});