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

Route::get('/acc', function () {

    return view('templates.templateMyacc');
});

//lista autores
Route::get('/authors','UtilizadorController@index');


Route::get('/newtutorial', function () {

    return view('tutoriais.templateInserirTutorial');
});

Route::get('/tutoriais',"CategoriaController@index");




Route::get('/about', function () {

    return view('templates.about');
});



Route::get("/login",'LoginController@index');





//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
