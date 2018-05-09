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
Route::get('/', function () {
    return view('main');
});

Route::get('/start', 'HomeController@home');

Route::get('/category/{id}', 'CategoriesController@index');

Route::get('/category/{id}/subcategory/create', 'SubcategoriesController@create');
Route::get('/category/{cid}/subcategory/{sid}', 'SubcategoriesController@index');
Route::post('/category/{id}/subcategory/create', 'SubcategoriesController@store');
Route::get('/category/{cid}/subcategory/{sid}/update', 'SubcategoriesController@update');
Route::put('/category/{cid}/subcategory/{sid}', 'SubcategoriesController@put');
Route::delete('/category/{cid}/subcategory/{sid}', 'SubcategoriesController@delete');


Route::get('/category/{cid}/subcategory/{sid}/decks/add', 'DecksController@newDeck');
Route::post('/category/{cid}/subcategory/{sid}/decks/add', 'DecksController@add');

Route::get('/deck/{id}', 'DecksController@index');
Route::get('/deck/{id}/all', 'DecksController@preview');
Route::get('/deck/once/{id}/{l1}/{l2}', 'DecksController@learnOnce');
Route::post('/deck/once/{id}/{l1}/{l2}', 'DecksController@resultOnce');
Route::get('/deck/multi/{id}/{l1}/{l2}', 'DecksController@learnMulti');
Route::post('/deck/multi/{id}/{l1}/{l2}', 'DecksController@resultMulti');
Route::get('/deck/test/{id}', 'DecksController@testKnowledgeStart');
Route::post('/deck/test/{id}', 'DecksController@testKnowledge');
Route::get('/deck/{id}/edit', 'DecksController@edit');
Route::put('/deck/{id}', 'DecksController@update');
Route::delete('/deck/{id}', 'DecksController@delete');

Route::get('/results', 'ResultsController@index')->name('results');

Auth::routes();

Route::get('/panel', function() {
	return view('/adminpanel');
});

Route::get('/dbusers', 'AdminController@index')->name('dbusers');
Route::get('/dbusers/user/{id}', 'AdminController@update');
Route::put('/dbusers/user/{id}', 'AdminController@put');
Route::delete('/dbusers/user/{id}', 'AdminController@delete');

Route::get('/cats', 'CategoriesController@list');
Route::get('/cats/new/create', 'CategoriesController@create');
Route::post('/cats/create', 'CategoriesController@store');
Route::get('/cats/{id}/update', 'CategoriesController@update');
Route::put('/cats/{id}', 'CategoriesController@put');
Route::delete('/cats/{id}', 'CategoriesController@delete');

Route::get('/subs', 'SubcategoriesController@list');
Route::get('/subs/{id}/create', 'SubcategoriesController@create');
Route::get('/subs/{cid}/subcategory/{sid}/update', 'SubcategoriesController@update');
Route::post('/subs/{id}/create', 'SubcategoriesController@store');
Route::put('/subs/{cid}/subcategory/{sid}', 'SubcategoriesController@put');
Route::delete('/subs/{cid}/subcategory/{sid}', 'SubcategoriesController@delete');

Route::get('/sets', 'DecksController@list');
Route::get('/sets/{id}/edit', 'DecksController@edit');
Route::put('/sets/{id}', 'DecksController@update');

Route::get('/sets/{cid}/subcategory/{sid}/add', 'DecksController@newDeck');
Route::post('/sets/{cid}/subcategory/{sid}/add', 'DecksController@add');
Route::delete('/sets/{id}', 'DecksController@delete');







