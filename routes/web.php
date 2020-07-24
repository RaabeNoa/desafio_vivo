<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('test-email', 'ApplicationController@store');

Route::group(['prefix' => 'knowledge'], function ()  {
    Route::get('', 'KnowledgeController@index')->name('list_knowledge');
    Route::get('/add', 'KnowledgeController@create')->name('form_add_knowledge');
    Route::post('/add', 'KnowledgeController@store')->name('add_knowledge');
    Route::delete('{id}', 'KnowledgeController@destroy')->name('delete_knowledge');
});

Route::group(['prefix' => 'applications'], function ()  {
    Route::get('', 'ApplicationController@index')->name('list_applications');
    Route::get('/apply', 'ApplicationController@create')->name('form_application');
    Route::post('/apply', 'ApplicationController@store')->name('add_application');
});
