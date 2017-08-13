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

Auth::routes();

Route::group(
    [
        'namespace' => 'Frontend',
        'middleware' => 'auth',
    ],
    function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::group(
            [
                'prefix' => 'quiz',
                'as' => 'quiz.',
            ],
            function () {
                Route::get('/create', 'QuizController@create')->name('create');
                Route::post('/store', 'QuizController@store')->name('store');
            }
        );
    }
);
