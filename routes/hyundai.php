<?php

Route::get('/', ['as' => 'home.index', 'uses' => 'FeHyundai\HomepageController@index']);
Route::get('/dang-ky-lai-thu', ['as' => 'marketing.activation', 'uses' => 'FeHyundai\RequestContainController@index']);
