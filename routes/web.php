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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth',])->resource('aula' , 'AulaController');
Route::middleware(['auth',])->resource('user' , 'UserController');
Route::middleware(['auth',])->resource('materia' , 'MateriaController');
Route::middleware(['auth',])->resource('asignacion' , 'AsignacionController');
Route::middleware(['auth',])->resource('equipo-asignacion' , 'EquipoAsignacionController');
Route::middleware(['auth',])->resource('equipo' , 'EquipoController');


