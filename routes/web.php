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

    return view('pages.start');
});



Route::get('/error', function () {

    return view('pages.error');
});

Route::get('/author', function () {

    return view('templates.templateMyacc');
});

Route::get('/newtutorial', function () {

    return view('tutoriais.templateInserirTutorial');
});

Route::get('/tutoriais', function () {

    return view('tutoriais.templateTutoriaisList');
});

Route::get('/about', function () {

    return view('tutoriais.templateTutoriaisList');
});


