<?php

namespace App\Services;


use Illuminate\Http\Request;
use App\DAO\AjaxDao;

class ValidationService
{



   
     public function validarCaptchaToken($request){
         return "validando token... ".$request->token."";
    }
   
}
