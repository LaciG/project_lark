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

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notes', 'NoteController@index');

Route::post('/notes/store', 'NoteController@store');

Route::post('/notes/{id}/destroy', 'NoteController@destroy');

Route::post('/notes/{id}/edit', 'NoteController@edit');

Route::get('/todo', 'ToDoController@index');

Route::post('/todo/store', 'ToDoController@store');

Route::post('/todo/storeLabel', 'ToDoController@storeLabel');

Route::get('/result', function () {
    return view('search_result');
});

Route::get('/profile/view', function () {
    return view('profile');
});

Route::get('/profile/edit', function () {
    return view('profile');
});