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
Route::get('/menu',function(){
	return view('layouts.navbar_menu_responsive');
});
// Route::get('/fournisseur',function(){
// 	return view('Fournisseurs.Frs_Ajouter');
// });

// Route::get('/fournisseur','FournisseurController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fournisseur', 'FournisseurController@index');
