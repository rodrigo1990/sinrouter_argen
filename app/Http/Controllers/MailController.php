<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CreditoNoAprobado;
use App\Mail\CreditoPreAprobado;
use App\Mail\TrabajaConNosotros;
use App\Mail\ConvertiteEnComercializador;
use App\Mail\MailAdmin;
use Illuminate\Support\Facades\Mail;
use App\Provincia;
use App\Ciudad;
use App\Http\Controllers\FrontController;

class MailController extends Controller
{
    
    public function procesarSolicitudEnviarMail(Request $request){

        $email = "mcd77.1990@gmail.com";

    	$provincia = Provincia::find($request->provincia);

        $ciudad = Ciudad::find($request->localidad);

        $request->localidad = $ciudad->ciudad_nombre;


        $request->provincia = $provincia->provincia_nombre;


        $emailAdmin = "mcd77.1990@gmail.com";//mlo1mftx@robot.zapier.com

        Mail::to($emailAdmin)->send(new MailAdmin($request));

        $provincias  =Provincia::all();




    	switch ($request->banco) {

    		default:
    			
    			if(($provincia->provincia_nombre=='Santa Cruz') OR ($provincia->provincia_nombre=='Tierra del Fuego'))
    			{
    				

    				Mail::to($email)->send(new CreditoNoAprobado($request));

                    return view('landing-mail.credito_rechazado',['provincias'=> $provincias]);



    			}else{

    				if($request->empleador == "Empleado_publico" OR $request->empleador=="Empleado_privado" OR $request->empleador == 'Jubilado' ){

                        Mail::to($email)->send(new CreditoPreAprobado($request));
    				
    					return view('landing-mail.credito_pre_aprobado',['provincias'=> $provincias]);
    				
    				}else{

                        Mail::to($email)->send(new CreditoNoAprobado($request));

                        return view('landing-mail.credito_rechazado',['provincias'=> $provincias]);
    				
    				}//else


    			}//else

    			break;
    		
    		case  'no_poseo':
    				
    				Mail::to($email)->send(new CreditoNoAprobado($request));

                    return view('landing-mail.credito_rechazado',['provincias'=> $provincias]);

    			break;
    	}
    	
    }


 public function enviarTrabajaConNosotros(Request $request){



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
}
