<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CreditoNoAprobado;
use App\Mail\CreditoPreAprobado;
use App\Mail\TrabajaConNosotros;
use App\Mail\Argencambio;
use App\Mail\ConvertiteEnComercializador;
use App\Mail\MailAdmin;
use App\Mail\SolicitarSoporteShop;
use Illuminate\Support\Facades\Mail;
use App\Provincia;
use App\Ciudad;
use App\Http\Controllers\FrontController;
use  App\Services\ValidationService;
use Illuminate\Support\Facades\App;


class MailController extends Controller
{

    protected $validationService;
    protected $emailAdmin;
    protected $emailTrabajaConNosotros;
    protected $emailConvertiteEnComercializador;
    protected $emailFormularioArgencambio;
    protected $emailSoporteShop;


    function __construct(ValidationService $validationService){

      $this->validationService=$validationService;

      if(App::environment('production')==true){

         $this->emailAdmin = 'mlo1mftx@robot.zapier.com' ;
         $this->emailTrabajaConNosotros = "seleccion@argenpesos.com.ar" ;
         $this->emailConvertiteEnComercializador = "info@argenpesos.com.ar" ;
         $this->emailFormularioArgencambio = "cambio@argenpesos.com.ar";
         $this->emailSoporteShop = "info@argenpesos.com.ar" ;        
      
      }else{

        
            $this->emailAdmin = 'mcd77.1990@gmail.com' ;
             $this->emailTrabajaConNosotros = "mcd77.1990@gmail.com" ;
             $this->emailConvertiteEnComercializador = "mcd77.1990@gmail.com" ;
             $this->emailFormularioArgencambio = "mcd77.1990@gmail.com";
             $this->emailSoporteShop = "mcd77.1990@gmail.com" ;

          

      }




    }
    
    public function procesarSolicitudEnviarMail(Request $request){



        $email = $request->mail;

    	$provincia = Provincia::find($request->provincia);

        $ciudad = Ciudad::find($request->localidad);

        $request->localidad = $ciudad->ciudad_nombre;


        $request->provincia = $provincia->provincia_nombre;

        Mail::to($this->emailAdmin)->send(new MailAdmin($request));

        $provincias  =Provincia::all();


         try
          {
              $response = $this->validationService->validarPrestamo($request);
          }
          catch (\Exception  $e)
          {
              $response = "Error en el webservice, se no ha podido enviar la informacion";  

             //return view('landingError');
          }

        


    	switch ($request->banco) {

    		default:
    			
    			if(($provincia->provincia_nombre=='Santa Cruz') OR ($provincia->provincia_nombre=='Tierra del Fuego'))
    			{
    				

    				Mail::to($email)->send(new CreditoNoAprobado($request));

                    return view('landing-mail.credito_rechazado',compact('provincias','response'));



    			}else{

    				if($request->empleador == "Empleado_publico" OR $request->empleador=="Empleado_privado" OR $request->empleador == 'Jubilado' ){

                        Mail::to($email)->send(new CreditoPreAprobado($request));
    				
    					return view('landing-mail.credito_pre_aprobado',compact('provincias','response'));
    				
    				}else{

                        Mail::to($email)->send(new CreditoNoAprobado($request));

                        return view('landing-mail.credito_rechazado',compact('provincias','response'));
    				
    				}//else


    			}//else

    			break;
    		
    		case  '000'://no_poseo
    				
    				Mail::to($email)->send(new CreditoNoAprobado($request));

                    return view('landing-mail.credito_rechazado',compact('provincias','response'));

    			break;
    	}


    	
    }


 public function enviarTrabajaConNosotros(Request $request){


          Mail::to($this->emailTrabajaConNosotros)->send(new TrabajaConNosotros($request));

          $msg="true";

          $provincias = Provincia::all();

           return view("index",compact('msg','provincias'));

    }


    public function enviarConvertiteEnComercializador(Request $request){


          $provincia = Provincia::find($request->provincia);

          $ciudad = Ciudad::find($request->localidad);



          $request->provincia = $provincia->provincia_nombre;

          $request->localidad = $ciudad->ciudad_nombre;

          Mail::to($this->emailConvertiteEnComercializador)->send(new ConvertiteEnComercializador($request));

          return json_encode("Mail enviado correctamente ! ");


    }


    public function formularioArgencambio(Request $request){

          Mail::to($this->emailConvertiteEnComercializador)->send(new Argencambio($request));

          return json_encode("Mail enviado correctamente ! ");


    }



    public function solicitarSoporteShop(Request $request){

          Mail::to($this->emailSoporteShop)->send(new SolicitarSoporteShop($request));

          return json_encode("true");


    }
}
