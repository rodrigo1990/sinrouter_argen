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


class MailController extends Controller
{

    protected $validationService;


    function __construct(ValidationService $validationService){
      $this->validationService=$validationService;
    }
    
    public function procesarSolicitudEnviarMail(Request $request){



        $email = "mcd77.1990@gmail.com";

    	$provincia = Provincia::find($request->provincia);

        $ciudad = Ciudad::find($request->localidad);

        $request->localidad = $ciudad->ciudad_nombre;


        $request->provincia = $provincia->provincia_nombre;


        $emailAdmin = ["mcd77.1990@gmail.com","rodrigo@legioncreativa.com"];//mlo1mftx@robot.zapier.com

        Mail::to($emailAdmin)->send(new MailAdmin($request));

        $provincias  =Provincia::all();


         try
          {
              $response = $this->validationService->validarPrestamo($request);
          }
          catch (Exception  $e)
          {
              $response = $e;  
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



         /* $email = "mcd77.1990@gmail.com";

          Mail::to($email)->send(new TrabajaConNosotros($request));

          $msg="true";

          $provincias = Provincia::all();

           return view("index",compact('msg','provincias'));*/


          $email = "mcd77.1990@gmail.com";

          Mail::to($email)->send(new TrabajaConNosotros($request));

          $msg="true";

          $provincias = Provincia::all();

           return view("index",compact('msg','provincias'));








    }


    public function enviarConvertiteEnComercializador(Request $request){



          $email = "mcd77.1990@gmail.com";

          $provincia = Provincia::find($request->provincia);

          $ciudad = Ciudad::find($request->localidad);



          $request->provincia = $provincia->provincia_nombre;

          $request->localidad = $ciudad->ciudad_nombre;

          Mail::to($email)->send(new ConvertiteEnComercializador($request));

          return json_encode("Mail enviado correctamente ! ");


    }


    public function formularioArgencambio(Request $request){



          $email = "mcd77.1990@gmail.com";



          Mail::to($email)->send(new Argencambio($request));

          return json_encode("Mail enviado correctamente ! ");


    }



    public function solicitarSoporteShop(Request $request){

          $email = "mcd77.1990@gmail.com";

          Mail::to($email)->send(new SolicitarSoporteShop($request));

          return json_encode("true");


    }
}
