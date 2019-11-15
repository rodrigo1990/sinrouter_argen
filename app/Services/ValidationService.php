<?php

namespace App\Services;


use Illuminate\Http\Request;
use App\DAO\AjaxDao;
use GuzzleHttp\Client;

class ValidationService
{

	public function validarPrestamo($request=0){
	
	$client = new Client([
	    //'headers' => ['Content-Type' => 'application/json'],
          // Base URI is used with relative requests
          'base_uri' => 'http://motor.siisa.com.ar/restrequestserviceV2/',
          // You can set any number of default request options.
          'timeout'  => 15.0,
      ]);

/*	$array = [ 

     		'clientID' => 117,
     		'pin' => 1236,
     		'password' => 'Legion2019',

     		'params' =>[
				'nombre' => $request->nombre ,
				'apellido' => $request->apellido,
				'nroBanco' => (string)$request->banco,
				'provincia' => $request->provincia,
				'empleador' =>$request->empleador  ,
				'sueldo' => $request->sueldo ,
				'nroDoc' => $request->dni,
				'celular' =>$request->celular ,
				'localidad' => $request->localidad,
				'sexo' =>$request->sexo  ,
				'cuil' =>2035365531 ,
				'monto' => $request->valor_monto,
				'fillSiisaData' => (string)$request->fillSiisaData
			]
		];


	$array = json_encode($array);


     $response = $client->request('POST','ExecutePolicy/policyId/35',[
     	'body' =>$array,

     	 
     ]);*/



     $response = $client->request('POST','ExecutePolicy/policyId/35',[
     	'json' =>[

     		'clientID' => 117,
     		'pin' => 1236,
     		'password' => 'Legion2019',

     		'params' =>[
				'nombre' => $request->nombre ,
				'apellido' => $request->apellido,
				'nroBanco' => (string)$request->banco,
				'provincia' => $request->provincia,
				'empleador' =>$request->empleador  ,
				'sueldo' => $request->sueldo ,
				'nroDoc' => $request->dni,
				'celular' =>$request->celular ,
				'localidad' => $request->localidad,
				'sexo' =>$request->sexo  ,
				'cuil' =>2035365531 ,
				'monto' => $request->valor_monto,
				'fillSiisaData' => (string)$request->fillSiisaData
			]

     	]

     	 
     ]);



      dd($response->getBody()->getContents());


	}
   
}
