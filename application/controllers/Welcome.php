<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 
 function index(){
 
 	/*$this->load->model("Clientes_model");
 	
	$clientes2=$this->Clientes_model->nuevo_cliente("antonia","lopez","mujer","75164317H","17-12-1987","AV Dilar n-118 bajo-c",18195,697677869,456786956,"antonia@hotmail.com","hola esto es texto");
	if($clientes2){
		echo "correcto";
	}else{
		echo "incorrecto";
	}
 	//$eliminar=$this->Clientes->Eliminar_cliente(3);
 	//$resultado=$this->Clientes->listar_clientes(4);
 	//$resultado["usuario"]=$resultado;
 	//$this->load->view("welcome_message",$resultado);

	//$this->load->model("Producto");
	//$produc=$this->Producto->nuevo_producto("el precio del poder","pelicula",20,1983,"Brian de palma",250,"Tony Montana es un emigrante cubano frío e implacable que se instala en Miami con el propósito de convertirse en un gángster importante, y poder así ganar dinero y posición. Con la colaboración de su amigo Manny Rivera inicia una fulgurante carrera delictiva, como traficante de cocaína, con el objetivo de acceder a la cúpula de una organización de narcos.");
	//$eliminar=$this->Producto->eli_producto(1);
	//$pelicula=$this->Producto->peliculas("f");
	//$videojuego=$this->Producto->videojuego("f");
	

	//$copia=$this->Producto->nueva_copia(3);

	//$this->load->model("Genero");
	//$insertar=$this->Genero->nuevo_genero("accion");
	//$editar=$this->Genero->editar_genero(1,"fantasia");
	//$borrar=$this->Genero->eliminar_genero(1);

	//$this->load->model("Alquilar");
	//$alquiler2=$this->Alquilar->alquiler_pelicula(4,3,3);
	//$this->Alquilar->devuelve(1);
	//$sin=$this->Alquilar->sin_devolver();

	//$this->load->model("Venta");
	//$this->Venta->nueva_venta(6,30);
	//$venta=$this->Venta->ultimas_cien();
	

	/*****VISTAS THEME****/

	//$html=$this->load->view("theme/clientes.php",[],true);
	//$html=$this->load->view("theme/buscar_cliente.php",[],true);
	//$html=$this->load->view("theme/actualizar_datos.php",[],true);
	//$html=$this->load->view("theme/nuevo_cliente.php",[],true);
	//$html=$this->load->view("theme/Nuevo_producto.php",[],true);
	//$html=$this->load->view("theme/peliculas.php",[],true);
    //$html=$this->load->view("theme/ver_cliente.php",[],true);
	//$html=$this->load->view("theme/alquilar_peliculas.php",[],true);
	//$html=$this->load->view("theme/alquilar_videojuego.php",[],true);
	//$html=$this->load->view("theme/ver_pelicula.php",[],true);
	//$html=$this->load->view("theme/actualizar_pelicula.php",[],true);
	//$html=$this->load->view("theme/peliculas_sin_devolver.php",[],true);
	//$html=$this->load->view("theme/venta_producto.php",[],true);
	//$html=$this->load->view("theme/ultimas_cien_ventas.php",[],true);
	//$html=$this->load->view("theme/actualizar_videojuego.php",[],true);
	//$html=$this->load->view("theme/videojuegos.php",[],true);
	//$html=$this->load->view("theme/ver_videojuego.php",[],true);
	//$html=$this->load->view("theme/videojuegos_sin_devolver.php",[],true);
	//$html=$this->load->view("theme/listado_copias.php",[],true);


	//$conte["contenido"]=$html;
	
	
		//$this->load->view("panel.php",$conte);
	


	

	}
}

	
	

		

		
		
	
	
		

		


	


	
		


	
		
	

	
	

	

		

	
		
		
		


	

			




	
		
	
		/*$this->load->model("Genero");
		$editar=$this->Genero->editar_genero(1,"fantasia");
		if($editar){
			echo "editado correctamente";
		}else{
			echo "hubo un problema al editar el nuevo genero";
		}


	
	
		$this->load->model("Genero");
		$borrar=$this->Genero->eliminar_genero(1);
		if($borrar){
			echo "borrado correctamente";
		}



	
		$this->load->model("Alquilar");
		$alquiler2=$this->Alquilar->alquiler_pelicula(4,3,3);

			if($alquiler2){
				echo "alquilado correctamente";
			}else{
				echo "hubo un problema para alquilar";
			}


	}
}*/




 


?>
