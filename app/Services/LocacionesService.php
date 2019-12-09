<?php

namespace App\Services;


use Illuminate\Http\Request;
use App\DAO\LocacionesDAO;
use GuzzleHttp\Client;


class LocacionesService
{
    protected $locacionesDAO;

    function __construct(LocacionesDAO $locacionesDAO){
    	$this->locacionesDAO=$locacionesDAO;
    }

   
     public function buscarCiudadSegunProvincia($request){

        return $this->locacionesDAO->buscarCiudadSegunProvincia($request);
  	}




   
}
