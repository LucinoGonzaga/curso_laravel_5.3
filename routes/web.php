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

//Configurando rota para o controller via Get, será enviado array para o metodo @index.
Route::get('/contato/{id?}', ['uses'=>'ContatoController@index']);

//Essa rota foi criada para testar o recebimento via Post
Route::post('/contato', function (){
    //var_dump($_POST);
    dd($_POST);
    return "Contato POST";
});

//Essa rota foi criada para testar o recebimento via Put
Route::put('/contato', function (){
    return "Contato PUT";
});