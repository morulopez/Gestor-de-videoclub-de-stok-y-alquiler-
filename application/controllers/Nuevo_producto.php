<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo_producto extends CI_Controller {
 
 function index(){
 	echo "hola mundo";
 }
 function producto_nuevo(){
 	$this->load->model("Producto");
 	if(isset($_POST["boton_crear"])){
	 	$nuev_pro=$this->Producto->producto_nuev($_POST["titulo"],$_POST["tipo"],$_POST["precio"],$_POST["year"],$_POST["director"],$_POST["minut"],$_POST["sinopsis"]);
	 	
	 	if(isset($_POST["genero"])){
		 	$this->Producto->nuevo_genero($_POST["genero"]);
		 	
		 	$genero=$this->Producto->lis_genero();
		 	$id_producto=$this->Producto->unir_producto_genero();
		 	$nuevo_pro_ge=$this->Producto->nuev_producto_genero($genero["ID"],$id_producto["ID"]);
		 	if($nuevo_pro_ge){
		 		echo"producto creado correctamente";
		 		header("Refresh:1; url=");

		 	}else{
		 		echo "el producto no esta creado correctamente";
			 	}
	 	}
	 }
 	$html=$this->load->view("theme/nuevo_producto.php",[],true);
 	$conte["contenido"]=$html;
 	$this->load->view("panel.php",$conte);
 }

}

?>