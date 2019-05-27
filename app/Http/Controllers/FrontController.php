<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincia;

class FrontController extends Controller
{

	public function index(){

  		$provincias = Provincia::all(); 

        return view('index',['provincias'=>$provincias]);


  	}



  	public function sacaTuPrestamo(Request $request){

  		$provincias = Provincia::all(); 

        return view('saca_tu_prestamo',['provincias'=>$provincias]);

  	}

  	public function sacaTuPrestamo2(Request $request){

  		$provincias = Provincia::all(); 
      $nombre = $request->nombre;
      $apellido = $request->apellido;
       $dni = $request->dni;
       $telefono = $request->telefono;
       $mail = $request->mail;
       $codArea = $request->cod_area;



        return view('saca_tu_prestamo2',compact('provincias','nombre','apellido','dni','telefono','mail','codArea'));



  	}


      public function sucursales(Request $request){

      $provincias = Provincia::all(); 

        return view('sucursales',['provincias'=>$provincias]);

    }

     public function institucional(Request $request){

      $provincias = Provincia::all(); 

        return view('institucional',['provincias'=>$provincias]);

    }

    public function resp_social(Request $request){

      $provincias = Provincia::all(); 

        return view('resp_social',['provincias'=>$provincias]);

    }


    public function preguntas_frecuentes(Request $request){

      $provincias = Provincia::all(); 

        return view('preguntas_frecuentes',['provincias'=>$provincias]);

    }





}
