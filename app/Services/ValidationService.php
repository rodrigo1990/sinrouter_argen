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

      $response = $client->get('ExecutePolicy', [
      	'query'=> [
	      	'clientId' => 117,
	      	'pin'=> 1236,
	      	'password' => 'Argenpes0$',
	      	'policyId' => 35,
	        'params' => [
	        '1' => 'val1',
	        '2' => 'val2',
	        '3' => 'val3',
	        ]
    	]
        
    ]);

      //dd($response->getBody()->getContents());

    	return $response;
	}
   
}
