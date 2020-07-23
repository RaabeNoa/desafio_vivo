<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//Route::get('/', function () {
//    return view('knowledge.index');
//});

Route::group(['prefix' => 'knowledge'], function ()  {
    Route::get('', 'KnowledgeController@index')->name('list_knowledge');
    Route::get('/add', 'KnowledgeController@create')->name('form_add_knowledge');
    Route::post('/add', 'KnowledgeController@store')->name('add_knowledge');
    Route::delete('{id}', 'KnowledgeController@destroy')->name('delete_knowledge');
});
