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

$pagina = "ExampleController@";

Route::get('/', ['as' => 'welcome', 'uses' => $pagina . 'home']);

Route::get('/nombre', ['as' => 'nombre', 'uses' => $pagina . 'nombre']);

Route::get('/nombre/{nombre?}', ['as' => 'saludo', 'uses' => $pagina . 'saludar'
])->where('nombre', "[a-zA-ZáéíóúñÁÉÍÓÚÑ]*");
