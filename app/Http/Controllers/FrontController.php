<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;
use App\Novedad;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;


class FrontController extends Controller
{

  protected $provincias; 


  function __construct(){
      $this->provincias=Provincia::all();
    }

	public function index(){
      
        return view('index',['provincias'=>$this->provincias]);


  	}


    public function cambio(){

      $filename=storage_path("cambio/Cotizaciones.txt");


      $myfile = fopen($filename, "r") or die("Unable to open file!");
 
      while(!feof($myfile)) {
        

        $archivo =(string)fgets($myfile);

        $archivo = explode(';',$archivo);

      }

      $archivo[4] = str_replace(',','.',$archivo[4]);
      $archivo[5] = str_replace(',','.',$archivo[5]);




      fclose($myfile);


      return view('cambio',['provincias' => $this->provincias,'archivo' => $archivo]);

    }



    public function sucursalesCotizaciones(){

      
      

      $filename=storage_path("cambio/Cotizaciones.txt");


      $myfile = fopen($filename, "r") or die("Unable to open file!");
 
      while(!feof($myfile)) {
        

        $archivo =(string)fgets($myfile);

        $archivo = explode(';',$archivo);

      }

      $archivo[4] = str_replace(',','.',$archivo[4]);
      $archivo[5] = str_replace(',','.',$archivo[5]);



      fclose($myfile);




      return view('sucursales.cotizacion',['archivo'=>$archivo]);

    }



  	public function sacaTuPrestamo(Request $request){

     

        return view('saca_tu_prestamo2', [
          'provincias' => $this->provincias,
          'nombre' => $request->nombre,
          'apellido' => $request->apellido,
          'dni' => $request->dni,
          'telefono' => $request->telefono,
          'mail' => $request->mail,
          'codArea' =>  $request->cod_area
        ]);



  	}


      public function sucursales(Request $request){

        return view('sucursales',['provincias'=>$this->provincias]);

    }

     public function institucional(Request $request){

        return view('institucional',['provincias'=>$this->provincias]);

    }

    public function resp_social(Request $request){

        $novedades = Novedad::with('img')->get();

        return view('resp_social',[
                                  'provincias'=>$this->provincias,
                                  'novedades'=>$novedades




                                  ]);

    }


    public function preguntas_frecuentes(Request $request){

        return view('preguntas_frecuentes',[
          'provincias' => $this->provincias,
          'help' => "false"
        ]);

    }


    public function preguntas_frecuentes_help(Request $request){

        return view('preguntas_frecuentes',[
          'provincias' => $this->provincias,
          'help' => 'true'
        ]);

    }


     public function consulta_tu_cuenta(Request $request){

        return view('consulta_tu_cuenta',['provincias'=>$this->provincias]);

    }

    public function landing1(){
      return view('landing-mail.credito_pre_aprobado',[
        'provincias'=>$this->provincias,
        'response' => null
      ]);
    }


    public function landing2(){
      return view('landing-mail.credito_rechazado',[
        'provincias'=>$this->provincias,
        'response' => null

      ]);
    }



    public function landingError(){ 
      return view('landingError',['provincias' => $this->provincias]);
    }



    public function test(){
      return (string)App::runningUnitTests();
    }





}
