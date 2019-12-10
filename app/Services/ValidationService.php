<?php

namespace App\Services;


use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ValidationService
{

	public function validarPrestamo($request=0){
	$client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'http://motor.siisa.com.ar/restrequestserviceV2/',
          // You can set any number of default request options.
          'timeout'  => 60.0,
      ]);


     $response = $client->post('ExecutePolicy/policyId/35',[
     	'json' =>[

     		'clientID' => 117,
     		'pin' => 1236,
     		'password' => 'Legion2019',

     		'params' =>[
				'nombre' => (string)$request->nombre ,
				'apellido' => (string)$request->apellido,
				'nroBanco' => (string)$request->banco,
				'provincia' => (string)$request->provincia,
				'empleador' =>(string)$request->empleador  ,
				'email' => (string)$request->mail,
				'sueldo' => (string)$request->sueldo ,
				'nroDoc' => (string)$request->dni,
				'celular' =>strval("".$request->codigo_area." 15-".$request->celular." "),
				'localidad' => (string)$request->localidad,
				'sexo' =>(string)$request->sexo  ,
				'cuil' =>'0' ,
				'monto' => (string)$request->valor_monto,
				'usuario' => 'LANDING',
				'fillSiisaData' => (string)$request->fillSiisaData
			]

     	]

     	 
     ]);

     return $response->getBody()->getContents();



	}

	public function validarCaptchaToken(Request $request){


      $client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'https://www.google.com/recaptcha/api/',
          // You can set any number of default request options.
          'timeout'  => 15.0,
      ]);

      $response = $client->request('POST', 'siteverify', [

        'form_params' => [
        'secret' => '6LdEebcUAAAAAN2EiJxUpkdxf1OiSztPVgp2u3r5',
        'response' => $request->token
        ]
        
    ]);

      //dd($response->getBody()->getContents());

    	return $response->getBody()->getContents();
    }
   
}
