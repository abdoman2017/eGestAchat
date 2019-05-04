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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('fournisseur', 'FournisseurController@index')->name('fournisseurs.index');
Route::get('fournisseur/create', 'FournisseurController@create')->name('fournisseurs.create');
Route::post('fournisseur', 'FournisseurController@store');
Route::get('fournisseur/{id}/edit', 'FournisseurController@edit');
Route::put('fournisseur/{id}', 'FournisseurController@update');
Route::delete('fournisseur/{id}', 'FournisseurController@destroy');