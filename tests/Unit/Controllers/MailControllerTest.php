<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Session;

class MailControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testProcesarSolicitudEnviarMailPreaprobado()
    {
        $this->withoutExceptionHandling();
        Session::start();
        //APROBADO EMPLEO PUBLICO
        $response = $this->post('procesarSolicitud',
            [
                '_token' => csrf_token(),
                'nombre' => 'RUTINA DE TESTING',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'dni' => 33666333,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto_solicitado' => 2222,
            	'mail' => 'mcd77.1990@gmail.com',
            	'provincia' => 1,//Buenos Aires
            	'localidad' => 16497
        	]

        );


        $response->assertViewIs('landing-mail.credito_pre_aprobado');


        //PREPAROBADO EMPLEO PRIVADO
        $response = $this->post('procesarSolicitud',
            [
                '_token' => csrf_token(),
                'nombre' => 'RUTINA DE TESTING',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'dni' => 33666333,
                'empleador' => 'Empleado_privado',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto_solicitado' => 2222,
                'mail' => 'mcd77.1990@gmail.com',
                'provincia' => 1,//Tierra del fuego
                'localidad' => 16497
            ]

        );


        $response->assertViewIs('landing-mail.credito_pre_aprobado');


        //PREPAROBADO JUBILADO
        $response = $this->post('procesarSolicitud',
            [
                '_token' => csrf_token(),
                'nombre' => 'RUTINA DE TESTING',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'dni' => 33666333,
                'empleador' => 'Jubilado',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto_solicitado' => 2222,
                'mail' => 'mcd77.1990@gmail.com',
                'provincia' => 1,//Tierra del fuego
                'localidad' => 16497
            ]

        );


        $response->assertViewIs('landing-mail.credito_pre_aprobado');


     }//function


    public function testProcesarSolicitudEnviarMailRechazado()
    {
      	$this->withoutExceptionHandling();
        Session::start();

        //RECHAZADO POR EMPLEADOR
        $response = $this->post('procesarSolicitud',
            [
                '_token' => csrf_token(),
                'nombre' => 'RUTINA DE TESTING',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'dni' => 33666333,
                'empleador' => 'Monotributista',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto_solicitado' => 2222,
                'mail' => 'mcd77.1990@gmail.com',
                'provincia' => 1,//Santa cruz
                'localidad' => 16497
            ]

        );

         $response->assertViewIs('landing-mail.credito_rechazado');




        //RECHAZADO POR PROVINCIA SANTA CRUZ
        $response = $this->post('procesarSolicitud',
            [
                '_token' => csrf_token(),
                'nombre' => 'RUTINA DE TESTING',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'dni' => 33666333,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto_solicitado' => 2222,
                'mail' => 'mcd77.1990@gmail.com',
                'provincia' => 20,//Santa cruz
                'localidad' => 16497
            ]

        );


        $response->assertViewIs('landing-mail.credito_rechazado');


        //RECHAZADO POR PROVINCIA TIERRA DEL FUEGO
        $response = $this->post('procesarSolicitud',
            [
                '_token' => csrf_token(),
                'nombre' => 'RUTINA DE TESTING',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'dni' => 33666333,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto_solicitado' => 2222,
                'mail' => 'mcd77.1990@gmail.com',
                'provincia' => 23,//Tierra del fuego
                'localidad' => 16497
            ]

        );


        $response->assertViewIs('landing-mail.credito_rechazado');


        //RECHAZADO POR BANCO 
        $response = $this->post('procesarSolicitud',
            [
                '_token' => csrf_token(),
                'nombre' => 'RUTINA DE TESTING',
                'apellido' => 'Legion Creativa',
                'banco' => 000,
                'dni' => 33666333,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto_solicitado' => 2222,
                'mail' => 'mcd77.1990@gmail.com',
                'provincia' => 23,//Tierra del fuego
                'localidad' => 16497
            ]

        );


        $response->assertViewIs('landing-mail.credito_rechazado');





    
    }//function




    public function testEnviarTrabajaConNosotros(){
    	$this->withoutExceptionHandling();
        Session::start();

        $response = $this->post('enviarTrabajaConNosotros',
    	[
    		'_token' => csrf_token(),
    		'nombre' => 'RUTINA DE TESTING',
    		'apellido' => 'creativa',
    		'dni' => 20321123,
    		'telefono' => 112332654,
    		'mail' => 'rodrigo@legioncreativa.com',
    		'consulta' => 'consuta',
    		'file' => UploadedFile::fake()->create('fakeCV.pdf'),
    		'file2' => UploadedFile::fake()->create('fakeCV.pdf')
    	]);

    	$response->assertViewIs('index');
    }


    public function testEnviarConvertiteEnComercializador(){
    	$this->withoutExceptionHandling();
        Session::start();

        $response = $this->post('enviarConvertiteEnComercializador',
    	[
    		'_token' => csrf_token(),
    		'nombre' => 'RUTINA DE TESTING',
    		'apellido' => 'creativa',
    		'dni' => 20321123,
    		'telefono' => 112332654,
    		'mail' => 'rodrigo@legioncreativa.com',
    		'comentarios' => 'consuta',
    		'provincia' => 1,
    		'localidad' => 1112 
    	]);

    	$response->assertStatus(200);
    }


    public function testFormularioArgencambio(){
    	$this->withoutExceptionHandling();
        Session::start();

        $response = $this->post('enviarArgencambio',
    	[
    		'_token' => csrf_token(),
    		'nombre' => 'RUTINA DE TESTING',
    		'apellido' => 'creativa',
    		'telefono' => 112332654,
    		'mail' => 'rodrigo@legioncreativa.com',
    		'comentarios' => 'consuta',
    	]);

    	$response->assertStatus(200);
    }


    public function testSolicitarSoporteShop(){
    	$this->withoutExceptionHandling();
        Session::start();

        $response = $this->post('solicitarSoporteShop',
    	[
    		'_token' => csrf_token(),
    		'celular' => 112332654,
    		

    	]);

    	$response->assertStatus(200);
    }


}//class