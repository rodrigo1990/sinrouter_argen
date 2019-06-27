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

/*****AJAX******/
Route::post('/buscarCiudadSegunProvincia','AjaxController@buscarCiudadSegunProvincia');
Route::post('/buscarCiudadSegunProvincia','AjaxController@buscarCiudadSegunProvincia');
Route::get('/buscarCiudadSegunProvincia/{provinciaId}','AjaxController@buscarCiudadSegunProvincia');
Route::post('/validarCaptchaToken','AjaxController@validarCaptchaToken');


/*****************PAGINAS************************/

Route::get('/','FrontController@index');
Route::get('/index','FrontController@index');



Route::get('/consulta_tu_cuenta','FrontController@consulta_tu_cuenta');

Route::get('/sucursales','FrontController@sucursales');

Route::get('/institucional','FrontController@institucional');

Route::get('/resp_social','FrontController@resp_social');

Route::get('/preguntas_frecuentes','FrontController@preguntas_frecuentes');



Route::get('/cpa', function () {
    return view('landing-mail.credito_pre_aprobado');
});

Route::get('/cr', function () {
    return view('landing-mail.credito_rechazado');
});


Route::get('/saca_tu_prestamo','FrontController@sacaTuPrestamo');
Route::get('/saca_tu_prestamo2','FrontController@sacaTuPrestamo2');


/***************MAILING***************************************/


Route::post('/procesarSolicitud','MailController@procesarSolicitudEnviarMail');

Route::post('/enviarTrabajaConNosotros','MailController@enviarTrabajaConNosotros');
Route::post('/enviarConvertiteEnComercializador','MailController@enviarConvertiteEnComercializador');
//Route::get('/enviarTrabajaConNosotros/{nombre}','MailController@enviarTrabajaConNosotros');

