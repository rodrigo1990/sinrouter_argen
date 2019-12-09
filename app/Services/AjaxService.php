<?php

namespace App\Services;


use Illuminate\Http\Request;
use App\DAO\AjaxDao;
use GuzzleHttp\Client;


class AjaxService
{
    protected $ajaxDao;

    function __construct(AjaxDao $ajaxDao){
    	$this->ajaxDao=$ajaxDao;
    }

   
     public function buscarCiudadSegunProvincia($request){

        return $this->ajaxDao->buscarCiudadSegunProvincia($request);
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
