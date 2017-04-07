<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/welcome', 'HomeController@welcome');
Route::get('/index', ['middleware' => 'auth', 'uses' => 'HomeController@index']);
Route::get('/', 'HomeController@home');

// 认证路由
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// 注册路由
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// 重置密码
Route::get('auth/password_reset', 'Auth\PasswordController@getEmail');

// 用户管理
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@index');
    Route::get('/all/{n?}', 'AdminController@all');
    Route::get('/add', 'AdminController@add');
    Route::post('/create', 'AdminController@create');
    Route::get('/edit/{id}', 'AdminController@edit');
    Route::post('/update', 'AdminController@update');
    Route::get('/delete/{id}', 'AdminController@delete');
});

// 个人设置
Route::get('/setting', 'SettingController@index');
Route::post('/setting/info', 'SettingController@info');
Route::post('/setting/avatar', 'SettingController@avatar');
Route::post('/setting/password', 'SettingController@password');

// 消息管理
Route::get('/message', function() {
    return view('message/index');
});

// 个人主页
Route::get('/user/{username?}', function() {
    return view('user');
});

// 其他功能模块
Route::get('/help', 'TodoController@index');
Route::get('/feedback', 'TodoController@index');

// 健康数据模块
Route::group(['prefix' => 'health'], function() {
    Route::get('/', 'HealthController@index');
    Route::get('/sports', 'HealthController@sports');
    Route::get('/getSportsData/{para}', 'HealthController@getSportsData');
    Route::get('/health', 'HealthController@health');
    Route::get('/getHealthData/{para}', 'HealthController@getHealthData');
    Route::get('/getHealthChartData', 'HealthController@getHealthChartData');
    Route::get('/sleep', 'HealthController@sleep');
    Route::get('/getSleepData', 'HealthController@getSleepData');
    Route::get('/getSleepChartData', 'HealthController@getSleepChartData');
    Route::get('/goal', 'HealthController@setGoal');
    Route::post('/goal', 'HealthController@updateGoal');
});

// 活动模块
Route::group(['prefix' => 'activity'], function() {
    Route::get('/', 'ActivityController@index');
    Route::get('/add', 'ActivityController@add');
    Route::post('/add', 'ActivityController@create');
    Route::get('/delete/{id}', 'ActivityController@delete');
    Route::get('/getAllData/{para?}', 'ActivityController@getAllData');
    Route::get('/edit/{id?}', 'ActivityController@edit');
    Route::post('/edit', 'ActivityController@update');
    Route::get('/detail/{id}', 'ActivityController@detail');
    Route::get('/join/{id}', 'ActivityController@join');
});

// 建议模块
Route::group(['prefix' => 'expert'], function() {
    Route::get('/', 'AdviceController@index');
    Route::get('/addQuestion', 'AdviceController@addQuestion');
    Route::post('/addQuestion', 'AdviceController@createQuestion');
    Route::get('/editQuestion/{id}', 'AdviceController@editQuestion');
    Route::post('/editQuestion', 'AdviceController@updateQuestion');
    Route::get('/deleteQuestion/{id}', 'AdviceController@deleteQuestion');
    Route::get('/getQuestionData/{para?}/{type?}', 'AdviceController@getQuestionData');
    //para: 默认0为我的提问，1为所有提问，2为我回答的问题； type： 默认0为所有，1为健康，2为运动
    Route::get('/detail/{id}', 'AdviceController@detail');
    Route::get('/reply/{id}', 'AdviceController@reply');
    Route::post('/reply', 'AdviceController@createReply');
    Route::get('/editReply/{qid}/{id}', 'AdviceController@editReply');
    Route::post('/editReply', 'AdviceController@updateReply');
    Route::get('/deleteReply/{qid}/{id}', 'AdviceController@deleteReply');
    Route::get('/import', 'AdviceController@import');
    Route::post('/import', 'AdviceController@dealImport');
});

// 朋友圈模块
Route::get('/moment', function() {
    return view('moment/index');
});

// 兴趣组模块
Route::get('/group', function() {
    return view('group/index');
});

Route::group(['prefix' => 'data'], function() {
    Route::get('/sports/create', 'DataController@sportsCreate');
    Route::get('/health/create', 'DataController@healthCreate');
    Route::get('/sleep/create', 'DataController@sleepCreate');
    Route::post('/sports', 'DataController@sportsStore');
    Route::post('/health', 'DataController@healthStore');
    Route::post('/sleep', 'DataController@sleepStore');
});