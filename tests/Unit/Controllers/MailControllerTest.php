<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
                'nombre' => 'Legion Creativa',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto' => 17000,
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
                'nombre' => 'Legion Creativa',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'empleador' => 'Empleado_privado',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto' => 17000,
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
                'nombre' => 'Legion Creativa',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'empleador' => 'Jubilado',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto' => 17000,
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
                'nombre' => 'Legion Creativa',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'empleador' => 'Monotributista',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto' => 17000,
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
                'nombre' => 'Legion Creativa',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto' => 17000,
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
                'nombre' => 'Legion Creativa',
                'apellido' => 'Legion Creativa',
                'banco' => 007,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto' => 17000,
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
                'nombre' => 'Legion Creativa',
                'apellido' => 'Legion Creativa',
                'banco' => 000,
                'empleador' => 'Empleado_publico',
                'sueldo' => 17000,
                'codigo_area' => 203,
                'celular' => 23326545,
                'sexo' => 'Masculino',
                'fillSiisaData' => 'testNumber',
                'monto' => 17000,
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

        $this->post('enviarTrabajaConNosotros',
    	[

    	]);
    }


}//class