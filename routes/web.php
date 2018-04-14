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

Route::group(['namespace' => 'Frontend'], function () {
    include 'frontend.php';
});

Route::get('rss-feed', function () {

    /* create new feed */
    $feed = App::make("feed");
 
 
    /* creating rss feed with our most recent 20 posts */
    $posts = \DB::table('news')->orderBy('published_on', 'desc')->take(20)->get();
 
 
    /* set your feed's title, description, link, pubdate and language */
    $feed->title = 'Cripted Daily News';
    $feed->description = 'Live cryptocurrency prices, market capitalization, trades, volumes, news and reviews';
    $feed->logo = env('APP_URL').'/asset/images/logo.jpg';
    $feed->link = url('feed');
    $feed->setDateFormat('datetime');
    $feed->pubdate = $posts[0]->published_on;
    $feed->lang = 'en';
    $feed->setShortening(true);
    // $feed->setTextLimit(100);
 
    foreach ($posts as $post)
    {
        $feed->add($post->title, 'Crypted Daily', URL::to(env('APP_URL').'news/go/'.$post->hashid), $post->published_on, $post->body, '');
    }
 
 
    return $feed->render('atom');
 
 
 });

// Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
//     include 'backend.php';
// });

//Auth::routes();