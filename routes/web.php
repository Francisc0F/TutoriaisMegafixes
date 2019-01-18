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

Route::get('/','PageController@index');



Route::get('/error', function () {

    return view('pages.error');
});

Route::get('/acc','UtilizadorController@myAcc');

//lista autores
Route::get('/authors','UtilizadorController@index');


Route::get('/newtutorial', function () {

    return view('tutoriais.templateInserirTutorial');
});

Route::get('/categorias',"CategoriaController@index");


Route::get('/categorias/listTutoriais/{id}',"CategoriaController@listTutoriais");

Route::get('/utilizador/tutoriaisList/{id}',"UtilizadorController@tutoriaisList");


//search tutorial
Route::post('/search',"TutorialController@search");

//criar tutorial
Route::get('/create',"TutorialController@create");
Route::post('/store',"TutorialController@store");


//ver tutorial
Route::get('/show/{id}',"TutorialController@show");





Route::get('/about', function () {

    return view('templates.about');
});



//Auth routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
