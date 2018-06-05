<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
 
 function index(){
 	echo "hola mundo";
 }
 function  listar_clientes(){
 	
        $this->load->model('Clientes_model', 'climodel');

        $array_cli = $this->climodel->listar_clientes();

        $html = $this->load->view("theme/clientes.php",['lista_clientes'=>$array_cli],true);

        $this->load->view("panel.php",['contenido'=>$html]);
       

 }
 function buscar_cliente(){
 	$this->load->model("Clientes_model");
 	if(isset($_POST["boton_clientes"])){
 	$cliente=$this->Clientes_model->buscar_cliente($_POST["cliente"]);
 	$cliente["bus_cliente"]=$cliente;
 	}
 	if(isset($_POST["boton"])){
 	$cliente=$this->Clientes_model->buscar_cliente($_POST["clientes"]);
 	$cliente["bus_cliente"]=$cliente;
 	}
 	$html=$this->load->view("theme/buscar_cliente.php",@$cliente,true);
 	$conte["contenido"]=$html;
	$this->load->view("panel.php",$conte);
	

 }
 function ver_cliente($id_cliente){
 	$this->load->model("Clientes_model");
 	$cliente=$this->Clientes_model->mirar_cliente($id_cliente);
 	$this->load->model("Alquilar");
	$sindevolver=$this->Alquilar->producto_cliente_sin_devolver($id_cliente);
	$sindevolver["sin"]=$sindevolver;
	$cliente=array_merge($cliente,$sindevolver);
 	$cliente["ver_clie"]=$cliente;
 	$html=$this->load->view("theme/ver_cliente.php",$cliente,true); 
 	$conte["contenido"]=$html;
 	$this->load->view("panel.php",$conte);
	 
	 	if(isset($_POST["si"])){
	 		$this->borrar_cliente($_POST["si"]);
	 	}else if(isset($_POST["no"])){
	 		header("Refresh:1; url=");
	 	}
	
 	
 }
 function borrar_cliente($ID){
 	$this->load->model("Clientes_model");
 	$cliente_eliminado=$this->Clientes_model->Eliminar_cliente($ID);
 	if($cliente_eliminado){
 		echo "<strong>CLIENTE ELIMINADO CORRECTAMENTE</STRONG>";
 		header("Refresh:1; url=".site_url('Clientes/listar_clientes')."");
 	}else{
 		echo "<strong>HUBO UN ERROR AL ELIMINAR EL CLIENTE</STRONG>";
 	}
 	
 }
 function actualizar_datos($id){
 	$this->load->model("Clientes_model");
 	if(isset($_POST["boton_actualizar"])){
 		$actu_cliente=$this->Clientes_model->Actualizar($id,$_POST["direccion"],$_POST["codigo_postal"],$_POST["telefono1"],$_POST["telefono2"],$_POST["email"],$_POST["nota"]);
 	    if($actu_cliente){
 	    	echo "los datos se han modificado correctamente";
 	    	header("Refresh:1; url=");
 	    }else{
 	    	echo "ha habido un error al actualizar los datos";
 	    	header("Refresh:1; url=");
 	    }
 	}
 	$cliente=$this->Clientes_model->mirar_cliente($id);
 	$cliente["ver_clie"]=$cliente;
 	$html=$this->load->view("theme/actualizar_datos.php",$cliente,true);
 	$conte["contenido"]=$html;
 	$this->load->view("panel.php",$conte);
 }
 function cliente_nuevo(){
 	$this->load->model("Clientes_model");
 	if(isset($_POST["boton_crear"])){
 	$nuevo=$this->Clientes_model->nuevo_cliente($_POST["nombre"],$_POST["apellidos"],$_POST["sexo"],$_POST["dni"],$_POST["nacimiento"],$_POST["direccion"],$_POST["codigo_postal"],$_POST["telefono1"],$_POST["telefono2"],$_POST["email"],$_POST["nota"]);
 		if($nuevo){
 			echo "usuario creado correctamente";
 			header("Refresh:1; url=");
 		}else{
 			echo "hubo un error al crear el usuario";
 			header("Refresh:1; url=");
 		}
 	}
 	$html=$this->load->view("theme/nuevo_cliente.php",[],true);
 	$conte["contenido"]=$html;
 	$this->load->view("panel.php",$conte);


 }

}

?>
