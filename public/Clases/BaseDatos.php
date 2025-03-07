<?php 

class BaseDatos{

	//public $base='legion_argenpesos_rs';
	//public $servidor='162.255.162.75';
	//public $user='legion_rodrigo';
	//public $pass='Javierjavier1990';

	public $base='arg_novedades';
	public $servidor='localhost';
	public $user='root';
	public $pass='';
	public $conexion;
	public $mysqli;


	public function __construct(){
		
		$this->conexion=mysqli_connect($this->servidor,$this->user,$this->pass,$this->base) or die ("No se ha podido establecer conexion con la base de datos");
	

		$this->mysqli=new mysqli($this->servidor, $this->user,$this->pass, $this->base);

		$this->mysqli->set_charset("utf8");
	}


	public function insertarAcademica($titulo,$descripcion,$imagen){



		try{
			//Renombrar archivos/campos
			$extension=pathinfo($imagen,PATHINFO_EXTENSION);

			$imagen=rand(100000000,999999999).".".$extension;


			//INSERCION EN BD
			$stmt=$this->mysqli->prepare("INSERT INTO experiencia_academica(titulo,descripcion,imagen)
		  		  						VALUES (?,?,?)");

			$stmt->bind_param("sss",$titulo,$descripcion,$imagen);
			$stmt->execute();

			echo "<h1 class='white-text'>El item ha <br> sido subido correctamente</h1>";


			try{

				//CARGA DE IMAGENES EN CARPETA
		
				//carga imagenes Big
				$target_path="../../imagenes/academicas/";
				$target_path=$target_path.$imagen;

				move_uploaded_file($_FILES['imagen']['tmp_name'],$target_path);


			}catch(Exception $e){

				echo "<h1 class='white-text'>¡Ups! Ha ocurrido un error mientras copiabamos los archivos a su carpeta : ",$e->getMessage(),"</h1>";
			
			}


			

		}catch(Exception $e){


			echo "<h1 class='white-text'>¡Ups! Ha ocurrido un error: ",$e->getMessage(),"</h1>";
		}



		$stmt->close();

	}//insertarAcademica


	









}//class


?>
