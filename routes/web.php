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

// Contacts
$app->post('/ContactsSet', 'ContactController@store');
$app->post('/ContactsSet/{id}', 'ContactController@update');
$app->get('/ContactsGet', 'ContactController@showAll');
$app->get('/ContactsGet/{id}', 'ContactController@show');
$app->delete('/ContactsDelete/{id}', 'ContactController@destroy');


// Candidates
$app->post('/CandidateSet', 'CandidateController@store');
$app->post('/CandidateSet/{id}', 'CandidateController@update');
$app->get('/CandidateGet', 'CandidateController@showAll');
$app->get('/CandidateGet/{id}', 'CandidateController@show');
$app->delete('/CandidateDelete/{id}', 'CandidateController@destroy');

// Voters
$app->post('/VoterSet', 'VoterController@store');
$app->post('/VoterSet/{id}', 'VoterController@update');
$app->get('/VoterGet', 'VoterController@showAll');
$app->get('/VoterGet/{id}', 'VoterController@show');
$app->post('/VoterLogin', 'VoterController@voterLogin');

// Votes
$app->post('/VoteSet', 'VoteController@store');
$app->post('/VoteSet/{id}', 'VoteController@update');
$app->get('/VoteGet', 'VoteController@showAll');
$app->get('/VoteGet/{id}', 'VoteController@show');
