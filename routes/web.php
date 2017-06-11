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

$app->get('/news', [
    'as' => 'ct', 'uses' => 'ArticleController@index'
]);

$app->get('/ct/{timestamp}', [
    'as' => 'ct', 'uses' => 'ArticleController@getCountNew'
]);

$app->get('/cl/{url}', [
    'as' => 'ct', 'uses' => 'ArticleController@click'
]);
