<?php

namespace App\Services;


use Illuminate\Http\Request;
use App\DAO\AjaxDao;
use GuzzleHttp\Client;

class ValidationService
{

	public function validarPrestamo($request=0){
		$client = new Client([
          // Base URI is used with relative requests
          'base_uri' => 'http://motor.siisa.com.ar/restrequestservice/',
          // You can set any number of default request options.
          'timeout'  => 15.0,
      ]);

	 $vars = array(
 	 	$request->nombre => 'nombre',
 	  	$request->apellido => 'apellido',
 	  	$request->banco => 'banco',
 	  	$request->provincia => 'provincia',
 	  	$request->empleador => 'empleador',
 	  	$request->sueldo => 'sueldo',
 	  	$request->dni => 'dni',
 	  	$request->celular => 'celular',
 	  	$request->localidad => 'localidad',
 	  	$request->sexo => 'sexo',
 	  	$request->valor_monto => 'monto'
	 	   );

	 $query = http_build_query($vars, null, '/');

	 $query = str_replace("=","/", $query);

	 $query = str_replace("+","%20", $query);

     $response = $client->get('ExecutePolicy/clientId/117/pin/1236/password/Legion2019/policyId/35/'.$query.'/');

      dd($response->getBody()->getContents());

	}
   
}
