<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alquiler extends CI_Controller {
 
 function index(){
 	echo "hola mundo";
 }
 	function alquilar_producto($id,$producto){
 		$this->load->model("Alquilar");
 		$copia_alquilar=$this->Alquilar->listar_copia_alquilar($producto);
	 		$copia_alquilar["copia"]=$copia_alquilar;
	 		$html=$this->load->view("theme/copia_producto_alquiler.php",$copia_alquilar,true);
 			$conte["contenido"]=$html;
 			$this->load->view("panel.php",$conte);
 				
 	}
 	function buscar_copia_alquiler($id,$tipo){
 		$this->load->model("Alquilar");
 		if(isset($_POST["copia"])){
 			$copia_buscar=$this->Alquilar->buscar_copia_alquilar($_POST["copia"],$tipo);
 			$copia_buscar["copia"]=$copia_buscar;
 			
 			if(count($copia_buscar)-1==0){
 				echo "<strong>ESTA PRODUCTO NO TIENE COPIA PARA ALQUILAR</strong>";
 				
 			}
 		}
 		if(isset($_POST["copia2"])){
 			$copia_buscar=$this->Alquilar->buscar_copia_alquilar($_POST["copia2"],$tipo);
 			$copia_buscar["copia"]=$copia_buscar;
 			
 			if(count($copia_buscar)-1==0){
 				echo "<strong>ESTA PRODUCTO NO TIENE COPIA PARA ALQUILAR</strong>";
 				
 			}
 		}
 			$html=$this->load->view("theme/buscar_producto_alquiler.php",$copia_buscar,true);
 			$conte["contenido"]=$html;
 			$this->load->view("panel.php",$conte);	
 			
 	}
	function copia_alquilar($id_copia,$id_producto,$id_cliente){
		$html=$this->load->view("theme/alquilar_peliculas.php",[],true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
		if(isset($_POST["si"])){
			$this->load->model("Alquilar");
			$alquilar=$this->Alquilar->alquiler_pelicula($id_copia,$id_producto,$id_cliente);
			if($alquilar){
				echo "PRODUCTO ALQUILADO CORRECTAMENTE";
				header("Refresh:1; url=".site_url('Clientes/listar_clientes')."");
			}else{
				echo "HA HABIDO UN ERROR AL ALQUILAR EL PRODUCTO";
				header("Refresh:1; url=");
			}
			
		}if(isset($_POST["no"])){
			header("location:".site_url('Clientes/listar_clientes')."");

		}
	}
	function actualizar_estado_copia($id_copia,$id_producto,$estado){
             $this->load->model("Alquilar");
             $estado_copia=$this->Alquilar->cambia_estado($id_copia,$estado);
			if($estado_copia){
				header("location:".site_url('Videojuegos/listado_copias/'.$id_producto)."");
			}          
	}
	function listar_producto_sin_devolver($palabra){
		$this->load->model("Alquilar");
		$sin_devolver=$this->Alquilar->sin_devolver($palabra);
		$sin_devolver["sin"]=$sin_devolver;
		$html=$this->load->view("theme/producto_sin_devolver",$sin_devolver,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
	}
	function devolver_producto($id_alquiler,$id_producto,$id_copia){
			$html=$this->load->view("theme/devolver_producto",[],true);
			$conte["contenido"]=$html;
			$this->load->view("panel.php",$conte);
			if(isset($_POST["si"])){
				$this->load->model("Alquilar");
				$devolver=$this->Alquilar->devuelve($id_alquiler,$id_producto,$id_copia);
				if($devolver){
					echo "PRODUCTO DEVUELTO CORRECTAMENTE";
					header("Refresh:1; url=".site_url('Clientes/listar_clientes')."");
				}
				
			}
			if(isset($_POST["no"])){
				header("location:".site_url('Clientes/listar_clientes')."");

				}
	}

}

?>
