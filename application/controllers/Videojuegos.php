<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videojuegos extends CI_Controller {
 
 function index(){
 	echo "hola mundo";
 }
 	function listar_videojuego(){
 		$this->load->model("Producto");
 		$videojuego=$this->Producto->lis_videojuego();
 		$videojuego["video"]=$videojuego;
 		$html=$this->load->view("theme/videojuegos.php",$videojuego,true);
 		$conte["contenido"]=$html;
 		$this->load->view("panel.php",$conte);
 	}
	function buscar_videojuego(){
		$this->load->model("Producto");
		if(isset($_POST["boton_buscar"])){
			$bus_videojuego=$this->Producto->videojuego($_POST["buscar_videojuego"]);
			$bus_videojuego["videojuego"]=$bus_videojuego;
			if(count($bus_videojuego)-1==0){
 				echo "<strong>ESTE VIDEOJUEGO NO EXISTE EN LA BASE DE DATOS</strong>";
 				
 			}
		}
		if(isset($_POST["boton"])){
			$bus_videojuego=$this->Producto->videojuego($_POST["buscar"]);
			$bus_videojuego["videojuego"]=$bus_videojuego;
			if(count($bus_videojuego)-1==0){
 				echo "<strong>ESTE VIDEOJUEGO NO EXISTE EN LA BASE DE DATOS</strong>";
 			}
		}
		$html=$this->load->view("theme/buscar_videojuego.php",$bus_videojuego,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
		

	}
	function ver_videojuego($id){
		$this->load->model("Producto");
		$videojuego=$this->Producto->perfil_videojuego($id);
		$videojuego["video"]=$videojuego;
		$html=$this->load->view("theme/ver_videojuego.php",$videojuego,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
		if(isset($_POST["si"])){
			$this->borrar_videojuego($_POST["si"]);
		}
		if(isset($_POST["no"])){
			header("Refresh:1; url=");
		}
		if(isset($_POST["si_copia"])){
			$this->nueva_copia_videojuego($_POST["si_copia"]);
		}
		if(isset($_POST["no_copia"])){
			header("Refresh:1; url=");
		}
	}
	function borrar_videojuego($id){
		$this->load->model("Producto");
		$producto=$this->Producto->eli_producto($id);
		if($producto){
			echo "producto borrado con exito";
			header("Refresh:1; url=".site_url('Videojuegos/listar_videojuego')."");
		}else{
			echo "hubo un error al borrar el producto";
		}
	}
	function nueva_copia_videojuego($id_producto){
			$this->load->model("Producto");
			$copia=$this->Producto->nueva_copia($id_producto);
			if($copia){
				echo "copia creada correctamente";
				header("Refresh:1; url=");
			}else{
				echo "hubo un error al crear la copia";
			}
			
	}
	function actualizar_videojuego($id,$id_genero){
		$this->load->model("Producto");
		$videojuego=$this->Producto->perfil_videojuego($id);
		$videojuego["video"]=$videojuego;
		if(isset($_POST["boton_actualizar"])){
			$actualizar=$this->Producto->editar_producto($id,$_POST["titulo"],$_POST["precio"],$_POST["year"],$_POST["director"],$_POST["minutos"],$_POST["sinopsis"]);
			$genero=$this->Producto->editar_genero($_POST["genero"],$id_genero);
			if($actualizar AND $genero){
				echo "<strong>PRODUCTO ACTUALIZADO CORRECTAMENTE</STRONG>";
				header("Refresh:1; url=");
			}else{
				echo"<strong>HUBO UN ERROR AL ACTUALIZAR EL PRODUCTO</strong>";
				header("Refresh:1; url=");
			}
		}

		$html=$this->load->view("theme/actualizar_videojuego.php",$videojuego,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);


	}
	function listado_copias($id){
		$this->load->model("Producto");
		$copia=$this->Producto->listado_copias($id);
		$copia["copia_peli"]=$copia;
		$html=$this->load->view("theme/listado_copias.php",$copia,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
		if(isset($_POST["si"])){
			$this->borrar_copia( $_POST["si"]);
		}

		
	}
	function borrar_copia($id){
		$this->load->model("Producto");
		$borrar=$this->Producto->borrar_copia($id);
		if($borrar){
			echo "<strong>COPIA DE PRODUCTO BORRADA CORRECTAMENTE</strong>";
			header("Refresh:1; url=");
		}

	}
}

?>