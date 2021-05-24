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


//  hien thi trang chu
Route::get('/', [
    'as'=>'home',
    'uses'=>'HomeController@index'
]);



//  hien thi trang admin
Route::get('/dashboard', [
    'as'=>'dashboard',
    'uses'=>'AdminController@showDashboard'
]);

//  hien thi trang login
Route::get('/admin', [
    'as'=>'admin',
    'uses'=>'AdminController@index'
]);

//  dang nhap admin
Route::post('/admin-dashboard', [
    'as'=>'admin-dashboard',
    'uses'=>'AdminController@dashboard'
]);

//  dang xuat admin
Route::get('/admin-logout', [
    'as'=>'admin-logout',
    'uses'=>'AdminController@logout'
]);

//  them danh muc san pham
Route::get('/add-category', [
    'as'=>'add-category',
    'uses'=>'CategoryController@addCategory'
]);

//  danh sach danh muc san pham
Route::get('/list-category', [
    'as'=>'list-category',
    'uses'=>'CategoryController@listCategory'
]);

//  luu danh muc san pham
Route::post('/save-category', [
    'as'=>'save-category',
    'uses'=>'CategoryController@saveCategory'
]);
//  cap nhat danh muc san pham
Route::post('/update-category/{id}', [
    'as'=>'update-category',
    'uses'=>'CategoryController@updateCategory'
]);

// chinh sua danh muc san pham
Route::get('/edit-category/{id}', [
    'as'=>'edit-category',
    'uses'=>'CategoryController@editCategory'
]);

//  Xoa danh muc san pham
Route::get('/delete-category/{id}', [
    'as'=>'delete-category',
    'uses'=>'CategoryController@deleteCategory'
]);

    //  Brand
//  them nhan hieu  san pham
Route::get('/add-brand', [
    'as'=>'add-brand',
    'uses'=>'BrandController@addBrand'
]);

//  luu nhan hieu san pham
Route::post('/save-brand', [
    'as'=>'save-brand',
    'uses'=>'BrandController@saveBrand'
]);

//  danh sach nhan hieu  san pham
Route::get('/list-brand', [
    'as'=>'list-brand',
    'uses'=>'BrandController@listBrand'
]);

// chinh sua nhan hieu san pham
Route::get('/edit-brand/{id}', [
    'as'=>'edit-brand',
    'uses'=>'BrandController@editBrand'
]);

//  cap nhat nhan hieu san pham
Route::post('/update-brand/{id}', [
    'as'=>'update-brand',
    'uses'=>'BrandController@updateBrand'
]);

//  Xoa nhan hieu san pham
Route::get('/delete-brand/{id}', [
    'as'=>'delete-brand',
    'uses'=>'BrandController@deleteBrand'
]);

    //  San pham
//  danh sach san pham
Route::get('/list-product', [
    'as'=>'list-product',
    'uses'=>'ProductController@listProduct'
]);

//  them  san pham
Route::get('/add-product', [
    'as'=>'add-product',
    'uses'=>'ProductController@addProduct'
]);

//  luu  san pham
Route::post('/save-product', [
    'as'=>'save-product',
    'uses'=>'ProductController@saveProduct'
]);

// chinh san pham
Route::get('/edit-product/{id}', [
    'as'=>'edit-product',
    'uses'=>'ProductController@editProduct'
]);

//  cap nhat  san pham
Route::post('/update-product/{id}', [
    'as'=>'update-product',
    'uses'=>'ProductController@updateProduct'
]);

//  Xoa nhan hieu san pham
Route::get('/delete-brand/{id}', [
    'as'=>'delete-brand',
    'uses'=>'BrandController@deleteBrand'
]);
