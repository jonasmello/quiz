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


Route::get('/quiz', 'QuizController@index')->name('route.quiz');

Route::get('/quiz/question/{id?}', 'QuizController@question')->name('route.quiz');


Route::get('/', function () {
    return redirect()->route('route.quiz');
});


