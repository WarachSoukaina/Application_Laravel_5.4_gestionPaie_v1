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



/**** authentification :***/
Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/damancom', function () {
    return view('damancom');
});

Route::get('/contrat', function () {
    return view('contrat');
});

Route::get('/test', function () {
    return view('test');
});
//*********************** l'affichage des vues :*************/

//Tableau de bord:
Route::get('/home', 'HomeController@index')->name('home');

// la presence des employés:
Route::get('/presence', 'PresenceController@index');

//Bulletin de paie :
Route::get('/bulletinpaie', 'BulletinPaieController@index');

// la vue de la creation d'employé :
Route::get('/creer', 'EmployeController@show');

// l'affichage des list des employés :
Route::get('/employes', 'EmployeController@index');

// l'affichage de vue de chaque profil :
Route::get('/details/{id}', 'EmployeController@details');
// l'affichage de la vue d'etatComptable :
Route::get('/etat', 'EtatController@index');
// l'affichage de la vue parametrage :
Route::get('/parametrage', 'ParametrController@index');

// l'affichage de la vue d'historique :
Route::get('/historique', 'HistoriqueController@index');



/***********************le traitement :**************************/

// pour l'ajout des profils :
Route::post('/create', 'EmployeController@create');
// ajouter un avatar au chaque employé :
Route::post('/photo/{id}', 'EmployeController@store');
// modifier les informations de chaque employé :
Route::post('/edit/{id}', 'EmployeController@updateEmploye');
// passer le même nombre pour tout les champs
Route::post('/default','PresenceController@list');