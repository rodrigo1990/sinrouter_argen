<?php

namespace App\Services;


use Illuminate\Http\Request;
use App\DAO\AjaxDao;
use GuzzleHttp\Client;

class ValidationService
{

	public function validarPrestamo($request=0){

/*		$url = 'http://motor.siisa.com.ar/restrequestserviceV2/ExecutePolicy/policyId/35';

$ch = curl_init($url);

$data = array(
    'clientID' => 117,
   'pin' => 1236,
   'password' => 'Legion2019',

   'params' =>array(
	           'nombre' => 'jose' ,
	           'apellido' => 'prueba',
	           'nroBanco' => '011',
	           'provincia' => 'buenos aires',
	           'empleador' => 'prueba',
	           'sueldo' => '30000',
	           'nroDoc' => '34132347',
	           'celular' => '3278673' ,
	           'localidad' => 'prueba',
	           'sexo' => 'f',
	           'cuil' => '0',
	           'monto' => '43217',
	           'fillSiisaData' => 'sdasd'
	           )
);
$payload = json_encode($data);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;*/

	
	$client = new Client([
	  //  'headers' => ['Content-Type' => 'application/json'],
          // Base URI is used with relative requests
          'base_uri' => 'http://motor.siisa.com.ar/restrequestserviceV2/',
          // You can set any number of default request options.
          'timeout'  => 15.0,
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
				'celular' =>(string)$request->celular ,
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
