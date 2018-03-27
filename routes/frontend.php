<?php

Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::group(['as' => 'home.'], function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get(LaravelLocalization::transRoute('routes.market'), 'HomeController@market')->name('market');
        Route::get(LaravelLocalization::transRoute('routes.market_page').'{size}', 'HomeController@setPageSize')->name('market.pageSize');
        Route::get(LaravelLocalization::transRoute('routes.coin').'{symbol}', 'HomeController@coin')->name('coin');
        Route::post(LaravelLocalization::transRoute('routes.search'), 'HomeController@search')->name('search');
        Route::get(LaravelLocalization::transRoute('routes.cron'), 'HomeController@cron')->name('cron');
        Route::get(LaravelLocalization::transRoute('routes.reset'), 'HomeController@reset')->name('reset');
    });

    Route::group(['as' => 'static.'], function () {
        Route::get(LaravelLocalization::transRoute('routes.terms'), 'HomeController@terms')->name('terms');
        Route::get(LaravelLocalization::transRoute('routes.privacy'), 'HomeController@privacy')->name('privacy');
        Route::get(LaravelLocalization::transRoute('routes.disclaimer'), 'HomeController@disclaimer')->name('disclaimer');
    });

    Route::group(['as' => 'contact.', 'prefix' => 'contact'], function () {
        Route::get('/', 'ContactController@index')->name('index');
        Route::post('store', 'ContactController@store')->name('store');
    });

    Route::group(['as' => 'news.', 'prefix' => 'news'], function () {
        Route::get('/', 'NewsController@index')->name('index');
        Route::get('go/{id}', 'NewsController@go')->name('go');
    });

    Route::group(['as' => 'api.', 'prefix' => 'api'], function () {
        Route::post('history/', 'ApiController@history')->name('history');
    });

    Route::group(['prefix' => 'sitemap', 'as' => 'sitemap.'], function () {
        Route::get('/', 'SitemapController@html')->name('index');
        Route::get('html', 'SitemapController@html')->name('html');
        Route::get('xml', 'SitemapController@xml')->name('xml');
        Route::get('txt', 'SitemapController@txt')->name('txt');
    });


});

Route::get('feed/{type?}', ['as' => 'feed.atom', 'uses' => 'FeedsController@getFeed']);


