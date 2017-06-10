<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$app->get('/', function () use ($app) {
    return view('index');
});

// $app->get('/news', function () use ($app) {
    // 'as' => 'ct', 'uses' => 'ArticleController@index'

    // sleep(1);
    // return \App\Models\Article::where('is_active', 1)->whereRaw('date(created_at) = CURDATE()')->orderBy('id', 'desc')->take(100)->get();
    // return \App\Models\Article::orderBy('id', 'desc')->offset(random_int(0,10))->take(random_int(0,10))->get();
// });

$app->get('/news', [
    'as' => 'ct', 'uses' => 'ArticleController@index'
]);

$app->get('/ct/{timestamp}', [
    'as' => 'ct', 'uses' => 'ArticleController@getCountNew'
]);

$app->get('/cl/{url}', [
    'as' => 'ct', 'uses' => 'ArticleController@click'
]);

//$app->get('/ct/{timestamp}', function () use ($app) {
//});