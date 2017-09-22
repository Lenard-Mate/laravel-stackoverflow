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

Route::get('/', 'HomeController@index');

Route::get('/questions/ask', 'QuestionController@showAsk');
Route::post('/questions/ask', 'QuestionController@ask')->name('questions.ask');
Route::get('/questions/{id}/{slug}', 'QuestionController@showQuestionDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/vote_question', 'QuestionAPIController@voteQuestion');
