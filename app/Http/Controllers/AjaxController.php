<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LocacionesService;
use Illuminate\Support\Facades\DB;
use App\Provincia;
use App\Services\ValidationService;

class AjaxController extends Controller
{
    protected $validationService;
    protected $locacionesService;

    function __construct(ValidationService $validationService, LocacionesService $locacionesService){

      $this->validationService = $validationService;
      $this->locacionesService = $locacionesService;

    }

   
     public function buscarCiudadSegunProvincia(Request $request){

        return json_encode($this->locacionesService->buscarCiudadSegunProvincia($request));
  	}

  	public function validarCaptchaToken(Request $request){


      return $this->validationService->validarCaptchaToken($request);
    }


    






}
