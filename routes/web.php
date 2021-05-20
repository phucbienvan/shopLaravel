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


