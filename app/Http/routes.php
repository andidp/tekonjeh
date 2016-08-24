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

Route::get('/', 'QuestionsController@index');

// Provide controller methods with object instead of ID
Route::model('questions', 'Question');
Route::model('answers', 'Answer');

// Use slugs rather than IDs in URLs
// Route::bind('tasks', function($value, $route) {
// 	return App\Task::whereSlug($value)->first();
// });
// Route::bind('projects', function($value, $route) {
// 	return App\Question::whereSlug($value)->first();
// });

Route::resource('questions', 'QuestionsController');
Route::resource('answers', 'AnswersController');

Route::delete('/questions/{questions}', 'QuestionsController@destroy');
