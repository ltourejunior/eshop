<?php

//Route::get('/', 'HomeController@signin');

Route::get('/', 'HomeController@homepage');
Route::get('/category/{id?}', 'HomeController@category')
    ->name('category')
    ->where('id', '[0-9]+');
Route::get('/sub_categories/{id?}', 'HomeController@sub_categories')
    ->name('sub_categories')
    ->where('id', '[0-9]+');
Route::get('/product/{id?}', 'HomeController@product')
    ->name('product')
    ->where('id', '[0-9]+');
Route::get('/checkout/{id?}', 'HomeController@checkout')
    ->name('checkout')
    ->where('id', '[0-9]+');


