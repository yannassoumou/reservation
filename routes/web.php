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

/*Route::get('/', function () {
    return view('logement/index');

});*/
Route::get('/',function (){
    return view('welcome');
});
Route::get('/logement', 'LogementController@index')->name('homelogement');
Route::get('/test', 'LogementController@test')->name('test');

//Route pour le formulaire select
Route::post('dynamic_dependent/fetch', 'LogementController@fetch')->name('logementcontroller.fetch');

//Route::get('/test','LogementController@list')->name('submitTolist');

Route::match(['get', 'post'],'/logement/list','LogementController@list')->name('logement.list');

Route::match(['get', 'post'],'/logement/residence','LogementController@logView')->name('logement.residence');

Route::get('/logement/appartement','LogementController@logApp')->name('logement.appartement');






Route::get('/admin','AdminController@admin')->middleware('is_admin')->name('admin');

Route::resource('logements','LogementCrudController')->middleware('is_admin');

Auth::routes();

Route::get('/logments', 'HomeController@index')->name('home');

Route::get('/planingcreate', 'LogementController@create');

Route::post('/planingupapp/', 'LogementController@uplLog')->name('logement.update');
/*Route::post('/planingupapp/{appdays}', 'LogementController@uplLog')->name('logement.updates');*/

Route::get('/profil/reservation','LogementController@profilReservation')->name('logement.profilres');
Route::get('/profil/client','LogementController@profilc')->name('logement.profilc');

Route::get('/profil/modifer','LogementController@update')->name('logement.edit');
Route::get('/profil/voir','LogementController@show')->name('logement.show');
Route::get('/profil/supprimer','LogementController@destroy')->name('logement.destroy');
