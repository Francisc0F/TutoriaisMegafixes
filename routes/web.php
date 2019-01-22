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

//admin info
Route::get('/getAuthors','UtilizadorController@getAuthors');
//start
Route::get('/','PageController@index');
//error
Route::get('/error', function () {

    return view('pages.error');
});

Route::get('/about', function () {

    return view('templates.about');
});


//utilizadores
Route::post('/utilizador/update/{id}','UtilizadorController@update');
Route::get('/acc/{id?}','UtilizadorController@myAcc');

//->ApagarConta
Route::get('/utilizador/destroy/{id}','UtilizadorController@destroy');

//lista autores
Route::get('/authors','UtilizadorController@index');
//lista Categorias
Route::get('/categorias',"CategoriaController@index");
//lista tutoriais por categoria
Route::get('/categorias/listTutoriais/{id}',"CategoriaController@listTutoriais");

//lista tutoriais por utilizador
Route::get('/utilizador/tutoriaisList/{id}',"UtilizadorController@tutoriaisList");



//tutoriais
//->search tutorial
Route::post('/search',"TutorialController@search");

//->criar tutorial
Route::get('/create',"TutorialController@create");
Route::post('/store',"TutorialController@store");


//->ver tutorial
Route::get('/show/{id}',"TutorialController@show");

//->Editar tutorial
Route::get('/edit/{id}',"TutorialController@edit");
Route::post('/update/{id}',"TutorialController@update");

//->Apagar Tutorial
Route::get('/delete/{id}',"TutorialController@destroy");










//Auth routes
Auth::routes();






Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
