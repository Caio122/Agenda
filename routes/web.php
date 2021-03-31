<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pessoa', 'PessoasController');
Route::get('pessoa/delete/{id}','PessoaController@destroy');

Route::resource('turma', 'TurmaController');
Route::get('turma/delete/{id}','TurmaController@destroy');


