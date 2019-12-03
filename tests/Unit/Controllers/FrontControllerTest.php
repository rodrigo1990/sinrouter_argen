<?php

namespace Tests\FrontControllerTest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FrontControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   


    public function testIndexView(){

    	$response = $this->call('GET','index');

    	$response->assertViewHas('provincias');

    	$response->assertViewIs('index');
    }


    public function testSacaTuPrestamoView(){

    	$response = $this->call('GET','saca_tu_prestamo');

    	$response->assertViewHasAll(['provincias','nombre','apellido','dni','telefono','mail','codArea']);

    	$response->assertViewIs('saca_tu_prestamo2');
    }


    public function testSucursalesView(){

    	$response = $this->call('GET','sucursales');

    	$response->assertViewHas('provincias');

    	$response->assertViewIs('sucursales');
    }


    public function testInstitucionalView(){

    	$response = $this->call('GET','institucional');

    	$response->assertViewHas('provincias');

    	$response->assertViewIs('institucional');
    }

    //NO SE PUEDE TESTEAR, HAY QUE CAMBIAR LA CONFIGURACION DE CLASES
    /*public function testResponsabilidadSocialView(){

    	$response = $this->call('GET','resp_social');

    	$response->assertViewHas('provincias');

    	$response->assertViewIs('resp_social');
    }*/


    public function testPreguntasFrecuentesView(){

    	$response = $this->call('GET','preguntas_frecuentes');

    	$response->assertViewHasAll(['provincias','help']);

    	$response->assertViewIs('preguntas_frecuentes');
    }



    public function testPreguntasFrecuentesHelpView(){

    	$response = $this->call('GET','preguntas_frecuentes');

    	$response->assertViewHasAll(['provincias','help']);

    	$response->assertViewIs('preguntas_frecuentes');
    }


    public function testConsultaTuCuentaView(){

    	$response = $this->call('GET','/micuenta/quiero-pagar.php');

    	$response->assertViewHas('provincias');

    	$response->assertViewIs('consulta_tu_cuenta');
    }


     public function testLandingPreAprobadoView(){

    	$response = $this->call('GET','landing1');

    	$response->assertViewHasAll(['provincias','response']);

    	$response->assertViewIs('landing-mail.credito_pre_aprobado');
    }


    public function testRechazadoView(){

    	$response = $this->call('GET','landing2');

    	$response->assertViewHasAll(['provincias','response']);

    	$response->assertViewIs('landing-mail.credito_rechazado');
    }


    public function testLandingErrorView(){

    	$response = $this->call('GET','landingError');

    	$response->assertViewHas('provincias');

    	$response->assertViewIs('landingError');
    }


    public function testCambioView(){

    	$response = $this->call('GET','cambio');

    	$response->assertViewHasAll(['provincias','archivo']);

    	$response->assertViewIs('cambio');
    }


    public function testSucursalesCotizacionesView(){

    	$response = $this->call('GET','sucursales_cotizaciones');

    	$response->assertViewHas('archivo');

    	$response->assertViewIs('sucursales.cotizacion');
    }
}
