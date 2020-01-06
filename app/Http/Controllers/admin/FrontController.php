<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Reporte;


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
    }





}
