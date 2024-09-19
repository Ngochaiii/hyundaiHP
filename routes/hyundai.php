<?php

Route::get('/', ['as' => 'home.index', 'uses' => 'FeHyundai\HomepageController@index']);

Route::post('/dang-ky-lai-thu-form', ['as' => 'regis.drive', 'uses' => 'FeHyundai\ContactController@ResgisDrive']);
Route::post('/dang-ky-lai-thu', ['as' => 'regis.drive2', 'uses' => 'FeHyundai\ContactController@drivedata']);


Route::get('/tin-tuc', ['as' => 'news.index', 'uses' => 'FeHyundai\BlogController@index']);

// Đặt route động ở cuối cùng
Route::get('/{alias}', ['as' => 'product.detail', 'uses' => 'FeHyundai\ProductController@detail']);
