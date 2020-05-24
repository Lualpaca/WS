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

Route::resource('Usuarios', 'UsuariosController');
Route::get('nuevo', 'RegistroController@index')->name('nuevo');

Route::post('/registrar', 'RegistroController@store')->name('registrar');


Route::get('consultar', 'RegistroController@show')->name('consultar');

//Route::get('eliminar/{id}', 'RegistroController@destroy')->name('eliminar');
Route::delete('eliminar/{id}', 'RegistroController@destroy')->name('eliminar');

Route::get('editar/{id}', 'RegistroController@edit')->name('editar');

Route::post('actualizar/{id}', 'RegistroController@update')->name('actualizar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mail/send', 'MailController@send');

Route::view('file', 'files.file');
Route::post('save', 'fileController@save');

Route::get('/cls', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::view('test', 'fechas.test');
Route::post('calcular', 'test@calcular');

Route::post('sumarFecha', 'test@sumarFecha');

Route::get('/vue', 'Controllervue@index')->name('vue');
