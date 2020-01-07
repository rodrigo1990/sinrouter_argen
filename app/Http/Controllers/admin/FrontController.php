<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Reporte;
use App\Novedad;
use App\ImgNovedad;


use App\Services\admin\SessionService;

use Illuminate\Support\Facades\DB;

use  App\Http\Controllers\admin\Controller;


class FrontController extends Controller
{
    protected $sessionService;


   function __construct(SessionService $sessionService){
      $this->sessionService=$sessionService;
    }


    public function index(){

    	return  Proyecto::with('Img')->get();
    }





    public function viewListReportes(Request $request){
        
        if($this->sessionService->accessSessionData()=="true"){
        
            $reportes = Reporte::all();
        
            return view('admin.reportes.listReportes',['reportes' => $reportes]);
        
        }else{

            return view('Admin/login');
        
        }

    }//function



    public function viewListNovedades(Request $request){

        if($this->sessionService->accessSessionData()=="true"){
        
            $novedades = Novedad::all();
        
            return view('admin.novedad.listNovedades',['novedades' => $novedades]);
        
        }else{
        
            return view('Admin/login');
        
        }

    }//function


      public function viewCreateNovedad(){
    
        if($this->sessionService->accessSessionData()=="true"){
       
            return view('admin.novedad.createNovedad');
        
        }else{

            return view('Admin/login');
       
        }
    }//function

    public function viewUpdateNovedad(Request $request){

        if($this->sessionService->accessSessionData()=="true"){
        
            $novedad = Novedad::find($request->id);
        
            $imagenes = ImgNovedad::where('novedad_id',$request->id)->orderBy('order','asc')->get(); 

            return view('admin.novedad.updateNovedad', compact('novedad','imagenes'));
        
        }else{
        
            return view('Admin/login');
        
        }
    }//function






}
