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

Route::get('/', [
    'as'=>'home',
    'uses'=>'HomeController@index'
]);


Route::get('/admin', [
    'as'=>'admin',
    'uses'=>'AdminController@index'
]);
Route::get('/dashboard', [
    'as'=>'dashboard',
    'uses'=>'AdminController@showDashboard'
]);
Route::post('/admin-dashboard', [
    'as'=>'admin-dashboard',
    'uses'=>'AdminController@dashboard'
]);
Route::get('/admin-logout', [
    'as'=>'admin-logout',
    'uses'=>'AdminController@logout'
]);

Route::get('/add-category', [
    'as'=>'add-category',
    'uses'=>'CategoryController@lo'
]);


Route::get('/list-category', [
    'as'=>'list-category',
    'uses'=>'CategoryController@lo'
]);

