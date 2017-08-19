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
    return $app->version();
});

$app->get('/ContactsGet', 'ContactController@showAll');
$app->get('/ContactsGet/{id}', 'ContactController@show');

$app->post('/ContactsSet', 'ContactController@store');
$app->put('/ContactsSet/{id}', 'ContactController@update');

$app->delete('/ContactsDelete/{id}', 'ContactController@destroy');
