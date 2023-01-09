<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Customer\DisplayController@index')->name('customer.view.index');
Route::get('/login', 'Customer\DisplayController@login')->name('customer.view.login');
Route::get('/register', 'Customer\DisplayController@register')->name('customer.view.register');
Route::get('/about', 'Customer\DisplayController@about')->name('customer.view.about');
Route::get('/category', 'Customer\DisplayController@category')->name('customer.view.category');
Route::get('/product', 'Customer\DisplayController@product')->name('customer.view.product');
Route::get('/news', 'Customer\DisplayController@news')->name('customer.view.news');
Route::get('/contact', 'Customer\DisplayController@contact')->name('customer.view.contact');

Route::middleware(['AuthAdmin:auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', 'Admin\DisplayController@login')->name('admin.login');
        Route::post('/login', 'Admin\AuthController@login')->name('admin.login');
    });
});

Route::prefix('customer')->group(function () {
    Route::prefix('apip')->group(function () {
        Route::prefix('category')->group(function () {
            Route::get('/get', 'Admin\CategoryController@get')->name('admin.category.get');
        });
    });
});


Route::middleware(['AuthAdmin:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');
        
        Route::get('/', 'Admin\DisplayController@index')->name('admin.index');

        Route::prefix('product')->group(function () {
            Route::get('/', 'Admin\ProductController@index')->name('admin.product.index');
        });
        Route::prefix('category')->group(function () {
            Route::get('/', 'Admin\CategoryController@index')->name('admin.category.index');
        });
        Route::prefix('branch')->group(function () {
            Route::get('/', 'Admin\BranchController@index')->name('admin.branch.index');
        });
        Route::prefix('warehouse')->group(function () {
            Route::get('/', 'Admin\WarehouseController@index')->name('admin.warehouse.index');
        });
    });



    Route::prefix('apip')->group(function () {
        Route::post('post-image', 'Admin\DisplayController@image')->name('admin.image.post'); 

        Route::prefix('category')->group(function () {
            Route::get('/get', 'Admin\CategoryController@get')->name('admin.category.get');
            Route::post('/store', 'Admin\CategoryController@store')->name('admin.category.store');
            Route::get('/get-one/{id}', 'Admin\CategoryController@get_one')->name('admin.category.get_one');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.category.update');
            Route::get('/delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');
        });
        
        Route::prefix('product')->group(function () {
            Route::get('/get', 'Admin\ProductController@get')->name('admin.product.get');
            Route::post('/store', 'Admin\ProductController@store')->name('admin.product.store');
            Route::get('/get-one/{id}', 'Admin\ProductController@get_one')->name('admin.product.get_one');
            Route::post('/update', 'Admin\ProductController@update')->name('admin.product.update');
            Route::get('/delete/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');
        });
        
        Route::prefix('branch')->group(function () {
            Route::get('/get', 'Admin\BranchController@get')->name('admin.branch.get');
            Route::post('/store', 'Admin\BranchController@store')->name('admin.branch.store');
            Route::get('/get-one/{id}', 'Admin\BranchController@get_one')->name('admin.branch.get_one');
            Route::post('/update', 'Admin\BranchController@update')->name('admin.branch.update');
            Route::get('/delete/{id}', 'Admin\BranchController@delete')->name('admin.branch.delete');
        });
        
        Route::prefix('warehouse')->group(function () {
            Route::get('get-item', 'Admin\WarehouseController@get_item')->name('admin.warehouse.item.get');
            Route::get('get-history', 'Admin\WarehouseController@get_history')->name('admin.warehouse.history.get');
            Route::get('get-order-fullfil', 'Admin\WarehouseController@get_order_fullfil')->name('admin.warehouse.item.get');
            Route::get('get-order-export', 'Admin\WarehouseController@get_order_export')->name('admin.warehouse.item.get');
            Route::get('get-order-shipping', 'Admin\WarehouseController@get_order_shipping')->name('admin.warehouse.item.get');
            
            Route::post('/store', 'Admin\WarehouseController@store')->name('admin.warehouse.store');
            Route::get('/get-one/{id}', 'Admin\WarehouseController@get_one')->name('admin.warehouse.get_one');
            Route::post('/update', 'Admin\WarehouseController@update')->name('admin.warehouse.update');
            Route::get('/delete/{id}', 'Admin\WarehouseController@delete')->name('admin.warehouse.delete');
        });

        Route::prefix('layout')->group(function () {
            Route::get('/get', 'Admin\LayoutController@get')->name('admin.layout.get');
            Route::post('/update', 'Admin\LayoutController@update')->name('admin.layout.update');
        });
        Route::prefix('role')->group(function () {
            Route::get('/get', 'Admin\LayoutController@get_role')->name('admin.role.get');
        });
    });
});
