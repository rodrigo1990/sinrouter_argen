<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Novedad;
use App\ImgNovedad;
use Illuminate\Support\Facades\Storage;
use  App\Http\Controllers\admin\Controller;

class NovedadController extends Controller
{
   public function createNovedad(Request $request){

	 	try {
	 		//NOVEDAD
	 		$novedad = new Novedad();

		 	$novedad->descripcion = $request->descripcion;

		 	$novedad->titulo = $request->titulo;

		 	$novedad->subtitulo = $request->subtitulo;

		 	$novedad->save();

		 	if($request->img_presentacion){

 			 	//IMAGEN PRESENTACION
 			 	$img_presentacion = new ImgNovedad();
 	
 			 	$name = rand(0,99999999);
 	
 			 	$format = $request->img_presentacion->extension();
 	
 			 	$img_presentacion->ruta = "".$name.".".$format."";
 	
 			 	$img_presentacion->nombre = $request->img_presentacion->getClientOriginalName(); 
 	
 			 	$request->img_presentacion->storeAs('storage/img/novedades/',$img_presentacion->ruta,'public');
 	
 	
 			 	$img_presentacion->tipo='PRESENTACION';
 	
 			 	$novedad->img()->save($img_presentacion);
 			 		
		 	}
		 	//IMG SLIDER
		 	for($i=0;$i<=count($request->img)-1;$i++){

			 	$img = new ImgNovedad();

			 	$name = rand(0,99999999);

			 	$format = $request->img[$i]->extension();

			 	$img->ruta = "".$name.".".$format."";

			 	$img->nombre = $request->img[$i]->getClientOriginalName(); 

			 	$path = $request->img[$i]->storeAs('storage/img/novedades/',$img->ruta,'public');

			 	$img->order = $i;

			 	$img->tipo = 'SLIDE';

			 	$novedad->img()->save($img);	
		 	
		 	}

		 	return redirect('/admin/viewListNovedades/"create"');


	 	} catch (Exception $e) {
			$msg = "Ha habido un problema: ".$e."";
	 		return view('admin.proyecto.createProyecto',['msg' => $msg]);

	 	}

	 }

	 public function destroyNovedad(Request $request){

	 	try {


	 		$imgs = ImgNovedad::where('novedad_id',$request->id)->get();

	 		foreach($imgs as $img){
	 			Storage::disk('public')->delete("storage/img/novedades/".$img->ruta."");
	 		}


	 		ImgNovedad::where('novedad_id',$request->id)->delete();

	 		Novedad::find($request->id)->delete();

			
		 	return redirect('/admin/viewListNovedades/"destroy"');


	 	} catch (Exception $e) {
			$msg = "Ha habido un problema: ".$e."";
	 		return view('admin.novedad.listNovedad',['msg' => $msg]);

	 	}

	 }


	 public function updateNovedad(Request $request){

	 	try {
	 		//PROYECTO
	 		$novedad = Novedad::find($request->id);

		 	$novedad->descripcion = $request->descripcion;

		 	$novedad->titulo = $request->titulo;

		 	$novedad->subtitulo = $request->subtitulo;

		 	$novedad->save();

		 	if($request->img_presentacion){

	 			$img = new ImgNovedad();

			 	$name = rand(0,99999999);

			 	$format = $request->img_presentacion->extension();

			 	$img->ruta = "".$name.".".$format."";

			 	$img->nombre = $request->img_presentacion->getClientOriginalName(); 

			 	$path = $request->img_presentacion->storeAs('storage/img/novedades/',$img->ruta,'public');


			 	$img->tipo = 'PRESENTACION';

			 	$novedad->img()->save($img);	

		 	}

		 	if($request->orderSlide){
			 	//ACTUALIZAR ORDEN EN SLIDES
				$f = min(array_keys($request->orderSlide));
				$l = max(array_keys($request->orderSlide));
				 	for($i=$f;$i<=$l;$i++){

				 		if(isset($request->orderSlide[$i])){
				 		
						 	$img = ImgNovedad::find($i);
		
						 	$img->order = $request->orderSlide[$i];
		
						 	$novedad->img()->save($img);
						}	
				 	
				 	}
			 }





		 	//IMG SLIDER
		 	if($request->img){
 			 	if(count($request->img)>0){
 			 		$f = array_key_first($request->img);
 			 		$l = array_key_last($request->img);
 	 			 	for($i=$f;$i<=$l;$i++){
 	 					
 	 			 		if(isset($request->img[$i])){

	 	 				 	$img = new ImgNovedad();
	 	 	
	 	 				 	$name = rand(0,99999999);
	 	 	
	 	 				 	$format = $request->img[$i]->extension();
	 	 	
	 	 				 	$img->ruta = "".$name.".".$format."";
	 	 	
	 	 				 	$img->nombre = $request->img[$i]->getClientOriginalName(); 
	 	 	
	 	 				 	$path = $request->img[$i]->storeAs('storage/img/novedades/',$img->ruta,'public');
	 	 	
	 	 				 	$img->tipo = 'SLIDE';

	 	 				 	$img->order = $i;
	 	 	
	 	 				 	$novedad->img()->save($img);

 	 				 	}
 	 			 	
 	 			 	}
 			 	}
		 	}



		 	return redirect('/admin/viewListNovedades/"update"');


	 	} catch (Exception $e) {
			$msg = "Ha habido un problema: ".$e."";
	 		return view('admin.novedad.createNovedad',['msg' => $msg]);

	 	}

	 	$f = min(array_keys($request->orderSlide));
		$l = max(array_keys($request->orderSlide));
	 	
		$a = array($f,$l);

	 


	 }

	  public function destroyImg(Request $request){

	 	try {


	 		$img = ImgNovedad::find($request->id);

	 		
 			Storage::disk('public')->delete("storage/img/novedades/".$img->ruta."");
	 		


	 		ImgNovedad::find($request->id)->delete();

			
		 	return 'true';


	 	} catch (Exception $e) {
			return $e;
	 	}

	 }

}
