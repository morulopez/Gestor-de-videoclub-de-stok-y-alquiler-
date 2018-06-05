<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas extends CI_Controller {
 
	 function index(){
	 	echo "hola mundo";
	 }
 	function listar_peliculas(){
 		$this->load->model("Producto");
 		$pelis=$this->Producto->peliculas();
 		$pelis["pelicula"]=$pelis;
 		$html=$this->load->view("theme/peliculas.php",$pelis,true);
 		$conte["contenido"]=$html;
 		$this->load->view("panel.php",$conte);
 	}
	function buscar_pelicula(){
		if(isset($_POST["boton_buscar"])){
			$this->load->model("Producto");
			$pelicula=$this->Producto->buscar_peliculas($_POST["buscar_pelicula"]);
			$pelicula["peli"]=$pelicula;

		}
		if(isset($_POST["boton"])){
			$this->load->model("Producto");
			$pelicula=$this->Producto->buscar_peliculas($_POST["buscar"]);
			$pelicula["peli"]=$pelicula;
		}
		$html=$this->load->view("theme/buscar_pelicula",$pelicula,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);

		
	}
	function ver_pelicula($id){
		$this->load->model("Producto");
		$ver_peli=$this->Producto->ver_pelicula($id);
		$ver_peli["pelicula"]=$ver_peli;
		$html=$this->load->view("theme/ver_pelicula.php",$ver_peli,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
		if(isset($_POST["si"])){
			$this->borrar_pelicula( $_POST["si"]);
		}elseif(isset($_POST["no"])){
			header("Refresh:1; url=");
		}
		if(isset($_POST["si_copia"])){
			$this->nueva_copia_pelicula($_POST["si_copia"]);
		}
		if(isset($_POST["no_copia"])){
			header("Refresh:1; url=");
		}
	}
	function borrar_pelicula($id){
		$this->load->model("Producto");
		$eliminar=$this->Producto->eli_producto($id);
		if($eliminar){
			echo "<strong>producto eliminado correctamente</strong>";
		}else{
			echo "<strong>Hubo un problema al eliminar el producto</strong>";
		}
	}
	function nueva_copia_pelicula($id_producto){
		$this->load->model("Producto");
			$copia=$this->Producto->nueva_copia($id_producto);
			if($copia){
				echo "copia creada correctamente";
				header("Refresh:1; url=");
			}else{
				echo "hubo un error al crear la copia";
			}
	}
	function actualizar_pelicula($id,$id_genero){
		$this->load->model("Producto");
		$ver_peli=$this->Producto->ver_pelicula($id);
		$ver_peli["pelicula"]=$ver_peli;
		$html=$this->load->view("theme/actualizar_pelicula.php",$ver_peli,true);
		$conte["contenido"]=$html;
		$this->load->view("panel.php",$conte);
		if(isset($_POST["boton_actualizar"])){
			$editar_producto=$this->Producto->editar_producto($id,$_POST["titulo"],$_POST["precio"],$_POST["year"],$_POST["director"],$_POST["minutos"],$_POST["sinopsis"]);
			$editar_genero=$this->Producto->editar_genero($_POST["genero"],$id_genero);
			if($editar_genero and $editar_producto){
				echo "<strong>PRODUCTO EDITADO CORRECTAMENTE</strong>";
				header("Refresh:1; url=");
			}else{
				echo "<strong>HUBO UN ERROR AL EDITAR EL PRODUCTO</strong>";
				header("Refresh:1; url=");
			}
		}
		
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