<?php

Route::get('/', ['as' => 'home.index', 'uses' => 'FeHyundai\HomepageController@index']);

Route::post('/dang-ky-lai-thu-form', [
    'as' => 'regis.drive',
    'uses' => 'FeHyundai\ContactController@ResgisDrive'
]);

// Sản phẩm
Route::get('/san-pham/{alias}', ['as' => 'product.detail', 'uses' => 'FeHyundai\ProductController@detail']);

// Tin tức
Route::get('/tin-tuc/{alias}', ['as' => 'news.detail', 'uses' => 'FeHyundai\NewsController@detail']);
Route::get('/danh-muc-tin/{alias}', ['as' => 'news.list', 'uses' => 'FeHyundai\NewsController@list']);

//
// Route::get('/tin-tuc', ['as' => 'news.index', 'uses' => 'FeHyundai\BlogController@index']);
// Route::get('/tin-tuc-chung', ['as' => 'news.list', 'uses' => 'FeHyundai\BlogController@list']);
// Route::get('/tin-tuc-khuyen-mai', ['as' => 'news.listpomo', 'uses' => 'FeHyundai\BlogController@listpomo']);
// Route::get('/tin-tuc/detail', ['as' => 'news.detail', 'uses' => 'FeHyundai\BlogController@detail']);



// // Đặt route động ở cuối cùng
// Route::get('/detail', ['as' => 'product.detail', 'uses' => 'FeHyundai\ProductController@detail']);

// // service
Route::get('/hyundai-me', ['as' => 'service.hyundai_me', 'uses' => 'FeHyundai\ServiceController@hyundaime']);
Route::get('/chuong-trinh-dich-vu', ['as' => 'service.service_programming', 'uses' => 'FeHyundai\ServiceController@service_programming']);
Route::get('/phu-tung-chinh-hieu', ['as' => 'service.genuine', 'uses' => 'FeHyundai\ServiceController@genuine']);
Route::get('/dich-vu-cuu-ho', ['as' => 'service.rescue_service', 'uses' => 'FeHyundai\ServiceController@rescue_service']);
Route::get('/dat-lich-sua-chua', ['as' => 'service.schedule_repair', 'uses' => 'FeHyundai\ServiceController@schedule_repair']);




