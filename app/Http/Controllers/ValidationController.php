<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  App\Services\ValidationService;
class ValidationController extends Controller
{

	protected $validationService;

    function __construct(ValidationService $validationService){
    	$this->validationService=$validationService;
    }


    public function validarCaptchaToken(Request $request){
    	return $this->validationService->validarCaptchaToken();
    }

}
