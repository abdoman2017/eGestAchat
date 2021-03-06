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

Route::get('/', 'UtilisateurController@identification')->name('login.identification');
Route::get('accueil/', 'UtilisateurController@accueil')->name('accueil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('fournisseur', 'FournisseurController@index')->name('fournisseurs.index');
Route::get('fournisseur/create', 'FournisseurController@create')->name('fournisseurs.create');
Route::post('fournisseur', 'FournisseurController@store');
Route::get('fournisseur/{id}/edit', 'FournisseurController@edit');
Route::put('fournisseur/{id}', 'FournisseurController@update');
Route::delete('fournisseur/{id}', 'FournisseurController@destroy');

Route::get('utilisateur', 'UtilisateurController@index')->name('utilisateurs.index');
Route::get('utilisateur/create', 'UtilisateurController@create')->name('utilisateurs.create');
Route::post('utilisateur', 'UtilisateurController@store')->name('utilisateur.store');
Route::get('utilisateur/{id}/edit', 'UtilisateurController@edit');
Route::put('utilisateur/{id}', 'UtilisateurController@update');
Route::delete('utilisateur/{id}', 'UtilisateurController@destroy');
Route::get('utilisateur_r/{id}/reset', 'UtilisateurController@reset');
Route::put('utilisateur_r/{id}', 'UtilisateurController@reset_save');
Route::post('/login_v', 'UtilisateurController@login');