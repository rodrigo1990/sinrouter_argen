<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AjaxService;
use Illuminate\Support\Facades\DB;
use App\Provincia;
use GuzzleHttp\Client;

class AjaxController extends Controller
{
    protected $ajaxService;

    function __construct(AjaxService $ajaxService){
    	$this->ajaxService=$ajaxService;
    }

   
     public function buscarCiudadSegunProvincia(Request $request){

        return json_encode($this->ajaxService->buscarCiudadSegunProvincia($request));
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
        'secret' => '6LdBErMUAAAAAAQf2RTrLOZq-VAouYFp36gSs-kH',
        'response' => $request->token
        ]
        
    ]);

      dd($response->getBody()->getContents());

    	return json_encode($response);
    }






}
