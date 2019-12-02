<?php

namespace App\Services;


use Illuminate\Http\Request;
use App\DAO\AjaxDao;
use GuzzleHttp\Client;

class ValidationService
{

	public function validarPrestamo($request=0){
	
	$client = new Client([
	  //  'headers' => ['Content-Type' => 'application/json'],
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
				'sueldo' => (string)$request->sueldo ,
				'nroDoc' => (string)$request->dni,
				'email' => (string)$request->mail,
				'celular' =>strval("".$request->codigo_area." 15-".$request->celular." "),
				'localidad' => (string)$request->localidad,
				'sexo' =>(string)$request->sexo  ,
				'cuil' =>'0' ,
				'monto' => (string)$request->valor_monto,
				'fillSiisaData' => (string)$request->fillSiisaData
			]

     	]

     	 
     ]);

     return $response->getBody()->getContents();





	}
   
}
