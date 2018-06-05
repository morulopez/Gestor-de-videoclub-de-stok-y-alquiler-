<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {
 
 function index(){
 	echo "hola mundo";
 }
 	function venta_producto($id_cliente){
 		$html=$this->load->view("theme/venta_producto",[],true);
 		$conte["contenido"]=$html;
 		$this->load->view("panel.php",$conte);
 		if(isset($_POST["venta"])){
 			$this->load->model("Ventas");
 			$venta=$this->Ventas->nueva_venta($id_cliente,$_POST["precio"],$_POST["nota"]);
 			if($venta){
 				echo "VENTA CREADA CON EXITO";
 				header("Refresh:1; url=");
 			}else{
 				echo "HUBO UN ERROR AL CREAR LA VENTA ASEGURESE DE RELLENAR LOS DOS CAMPOS";
 				header("Refresh:1; url=");
 			}
 		}
 		
 	}
	function ultimas_cien_ventas(){
		$this->load->model("Ventas");
		$venta=$this->Ventas->ultimas_cien();
		$venta["cien"]=$venta;
		$html=$this->load->view("theme/ultimas_cien_ventas",$venta,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
	}
}

?>