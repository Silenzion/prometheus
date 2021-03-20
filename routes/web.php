<?php

Route::group(['middleware' => ['web']], function () {

    /* User */

    Route::group([
        'prefix' => 'admin',
        'namespace' => 'Silenzion\Prometheus\Http\Controllers\Admin',
        'as' => 'admin.',
    ], function () {

//        /*Login*/
//        Route::group(function () {
//            Route::get('/login', 'LoginController@showLoginForm')->name('login');
//            Route::post('/login', 'LoginController@login')->name('login.submit');
//        });

        /*Auth*/
        Route::get('/', 'LoginController@login')->name('admin');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        /*Dashboards*/
        Route::prefix('dashboards')->group(function () {
            Route::name('dashboards.')->group(function () {
                Route::get('/main', 'DashboardController@getMainDashboard')->name('main');
                Route::get('/seo', 'DashboardController@getSeoDashboard')->name('seo');

            });
        });

        /*Users*/
        Route::resource('users', 'UserController');

        /*Categories*/
        Route::resource('categories', 'CategoryController');

        /*Articles*/
        Route::resource('articles', 'ArticleController');

        /*Comments*/
        Route::resource('comments', 'ArticleController')->only('index', 'show', 'destroy')->parameters([
            'trade_offer' => 'tradeOffer'
        ]);;

        /*News*/
        Route::resource('news', 'NewsController');

        /* Settings */
        Route::get('/settings', 'SettingController@index')->name('settings.index');
        Route::post('/settings', 'SettingController@store')->name('settings.store');

    });

    /*UI*/

});
