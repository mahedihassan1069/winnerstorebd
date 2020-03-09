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

//frontend site.............................................................
use Illuminate\Support\Facades\Route;

Route:: get('/', 'HomeController@index');
Route:: get('/books', 'HomeController@book');

//category wise routes are here
Route:: get('/product_by_category/{category_id}', 'HomeController@show_product_by_category');
Route:: get('/product_by_manufacture/{manufacture_id}', 'HomeController@show_product_by_manufacture');
Route:: get('/view_product/{product_id}', 'HomeController@product_details_by_id');


//cart routs are here----------------------------------
// cart gulu uncoment korte hobe======
Route:: post('add-to-cart', 'CartController@add_to_cart');
Route:: get('show-cart', 'CartController@show_cart');
Route:: get('add-product-details-to-cart/{rowId}', 'CartController@add_product_details_page');
Route:: get('delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route:: post('update-cart', 'CartController@update_cart');
Route:: post('add-details-cart', 'CartController@add_details_cart');


//checkout routes are her---------------------
Route:: get('login-check', 'CheckoutController@login_check');
Route:: post('customer_registration', 'CheckoutController@customer_registration');
Route:: get('checkout', 'CheckoutController@checkout');
Route:: post('save-shipping-details', 'CheckoutController@save_shipping_details');
Route:: get('/show_profile', 'CheckoutController@show_profile');


//login logout routes------------------
Route:: post('customer_login', 'CheckoutController@customer_login');
Route:: get('customer_logout', 'CheckoutController@customer_logout');

//payment routes--------------
Route:: get('payment', 'CheckoutController@payment');
Route:: post('order-place', 'CheckoutController@order_place');


//backend routes.............................................................
Route:: get('/logout', 'SuperAdminController@logout');
Route:: get('/admin', 'AdminController@index');
Route:: get('/dashboard', 'SuperAdminController@index');
Route:: post('/admin-dashboard', 'AdminController@dashboard');


//category related route
Route:: get('/add-category', 'CategoryController@index');
Route:: get('/all-category', 'CategoryController@all_category');
Route:: post('/save-category', 'CategoryController@save_category');
Route:: get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route:: post('/update-category/{category_id}', 'CategoryController@update_category');
Route:: get('/delete-category/{category_id}', 'CategoryController@delete_category');
Route:: get('/inactive_category/{category_id}', 'CategoryController@inactive_category');
Route:: get('/active_category/{category_id}', 'CategoryController@active_category');

//manufacture or brands or types route
// aigulu uncommnet corte hobe

Route:: get('/add-manufacture', 'ManufactureController@index');
Route:: post('/save-manufacture', 'ManufactureController@save_manufacture');
Route:: get('/all-manufacture', 'ManufactureController@all_manufacture');
Route:: get('/delete-manufacture/{manufacture_id}', 'ManufactureController@delete_manufacture');
Route:: get('/edit-manufacture/{manufacture_id}', 'ManufactureController@edit_manufacture');
Route:: get('/inactive_manufacture/{manufacture_id}', '  ManufactureController@inactive_manufacture');
Route:: get('/active_manufacture/{manufacture_id}', 'ManufactureController@active_manufacture');
Route:: post('/update-manufacture/{manufacture_id}', 'ManufactureController@update_manufacture');


//product routs
// aigulu uncommnet corte hobe
Route:: get('/add-product', 'ProductController@index');
Route:: post('/save-product', 'ProductController@save_product');
Route:: get('/all-product', 'ProductController@all_product');
Route:: get('/inactive_product/{product_id}', 'ProductController@inactive_product');
Route:: get('/active_product/{product_id}', 'ProductController@active_product');
Route:: get('/delete-product/{product_id}', 'ProductController@delete_product');
Route:: get('/edit-product/{product_id}', 'ProductController@edit_product');
Route:: post('/update-product/{product_id}', 'ProductController@update_product');


//Order routes-----------------------
// aigulu uncommnet corte hobe
Route:: get('/manage-order', 'OrderController@manage_order');
Route:: get('/view-order/{order_id}', 'OrderController@view_order');
Route:: get('/delete-order/{order_id}', 'OrderController@delete_order');

//product_details........................
// aigulu uncommnet corte hobe
Route::get('/product-details', 'CartController@product_details');