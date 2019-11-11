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
 	 	(string)$request->nombre => 'nombre',
 	  	(string)$request->apellido => 'apellido',
 	  	(string)$request->banco => 'banco',
 	  	(string)$request->provincia => 'provincia',
 	  	(string)$request->empleador => 'empleador',
 	  	(float)$request->sueldo => 'sueldo',
 	  	(int)$request->dni => 'dni',
 	  	(int)$request->celular => 'celular',
 	  	(string)$request->localidad => 'localidad',
 	  	(string)$request->sexo => 'sexo',
 	  	(float)$request->valor_monto => 'monto'
	 	   );

	 $query = http_build_query($vars, null, '/');

	 $query = str_replace("=","/", $query);

	 $query = str_replace("+","%20", $query);

     $response = $client->get('ExecutePolicy/clientId/117/pin/1236/password/Legion2019/policyId/35/'.$query.'/');

      //dd($response->getBody()->getContents());

	}
   
}
