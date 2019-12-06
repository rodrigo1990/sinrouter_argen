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


Route::get('/shop','FrontController@index');



Route::get('/micuenta/quiero-pagar.php','FrontController@consulta_tu_cuenta');

Route::get('/sucursales','FrontController@sucursales');

Route::get('/institucional','FrontController@institucional');

Route::get('/resp_social','FrontController@resp_social');

Route::get('/preguntas_frecuentes','FrontController@preguntas_frecuentes');


Route::get('/preguntas_frecuentes_help/','FrontController@preguntas_frecuentes_help');

Route::get('/landing1/','FrontController@landing1');
Route::get('/landing2/','FrontController@landing2');



Route::get('/cpa', function () {
    return view('landing-mail.credito_pre_aprobado');
});

Route::get('/cr', function () {
    return view('landing-mail.credito_rechazado');
});




Route::get('/saca_tu_prestamo','FrontController@sacaTuPrestamo');


Route::get('/cambio','FrontController@cambio');

Route::get('/sucursales_cotizaciones','FrontController@sucursalesCotizaciones');

Route::get('/siisa','ValidationController@pruebaString');

Route::get('/landingError','FrontController@landingError');

/***************MAILING***************************************/


Route::post('/procesarSolicitud','MailController@procesarSolicitudEnviarMail');

Route::post('/enviarTrabajaConNosotros','MailController@enviarTrabajaConNosotros');
Route::post('/enviarConvertiteEnComercializador','MailController@enviarConvertiteEnComercializador');
Route::post('/enviarArgencambio','MailController@formularioArgencambio');


Route::post('/solicitarSoporteShop','MailController@solicitarSoporteShop');




//Route::get('/enviarTrabajaConNosotros/{nombre}','MailController@enviarTrabajaConNosotros');

