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


/*ADMIN*/


Route::get('/admin/viewCreateProyecto', 'admin\FrontController@viewCreateProyecto');
Route::get('/admin/viewListProyectos/{msg}', 'admin\FrontController@viewListProyectos');
Route::get('/admin/viewUpdateProyecto/{id}', 'admin\FrontController@viewUpdateProyecto');

Route::get('/admin/viewCreateTestimonio', 'admin\FrontController@viewCreateTestimonio');
Route::get('/admin/viewListTestimonios/{msg}', 'admin\FrontController@viewListTestimonios');
Route::get('/admin/viewUpdateTestimonio/{id}', 'admin\FrontController@viewUpdateTestimonio');

Route::get('/admin/viewCreateNovedad', 'admin\FrontController@viewCreateNovedad');
Route::get('/admin/viewListNovedades/{msg}', 'admin\FrontController@viewListNovedades');
Route::get('/admin/viewUpdateNovedad/{id}', 'admin\FrontController@viewUpdateNovedad');

Route::get('/admin/login/{username}/{password}', 'admin\UserController@login');
Route::post('/admin/login', 'admin\UserController@login');
Route::post('/admin/logout', 'admin\UserController@logout');
Route::get('/admin/users', 'admin\UserController@users');


Route::post('/admin/createProyecto', 'admin\ProyectoController@createProyecto');
Route::get('/admin/destroyProyecto/{id}', 'admin\ProyectoController@destroyProyecto');
Route::get('/admin/updateProyecto/{id}', 'admin\ProyectoController@viewUpdateProyecto');
Route::post('/admin/destroyImgProyecto/', 'admin\ProyectoController@destroyImg');
Route::post('/admin/updateProyecto/', 'admin\ProyectoController@updateProyecto');



Route::get('/admin/pruebaString', 'admin\TestimonioController@pruebaString');
Route::post('/admin/createTestimonio', 'admin\TestimonioController@createTestimonio');
Route::get('/admin/destroyTestimonio/{id}', 'admin\TestimonioController@destroyTestimonio');
Route::post('/admin/updateTestimonio', 'admin\TestimonioController@updateTestimonio');
Route::post('/admin/destroyImgTestimonio/', 'admin\TestimonioController@destroyImg');


Route::post('/admin/createNovedad', 'admin\NovedadController@createNovedad');
Route::get('/admin/destroyNovedad/{id}', 'admin\NovedadController@destroyNovedad');
Route::post('/admin/updateNovedad', 'admin\NovedadController@updateNovedad');
Route::post('/admin/destroyImgNovedad/', 'admin\NovedadController@destroyImg');



Route::get('/panel/', function () {
    return view('Admin/login');
});
//Route::get('/enviarTrabajaConNosotros/{nombre}','MailController@enviarTrabajaConNosotros');

