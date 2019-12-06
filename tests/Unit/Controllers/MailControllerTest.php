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
    public function testProcesarSolicitudEnviarMail()
    {
        $this->withoutExceptionHandling();
        Session::start();
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
            	'provincia' => 1,
            	'localidad' => 16497
        	]

        );


        $response->assertViewIs('landing-mail.credito_pre_aprobado');

    }
}
