<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('usuario/{codigo}', function($codigo)
{
    return 'Hola usuarios '.$codigo;
})
->where('codigo', '[A-Za-z]+');
;*/

Route::get('escritorio',[
  'as'=> 'escritorio','uses'=>'DesktopController@index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
