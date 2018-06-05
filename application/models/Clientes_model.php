<?php

class Clientes_model extends CI_Model{

function nuevo_cliente($nombre,$apellidos,$sexo,$dni,$nacimiento,$direccion,$codigo_postal,$telefono,$telefono2,$email,$nota){
	
		if(is_numeric($telefono)){
			$tel=true;
		}else{
			$tel=false;
			
		}
	
	if(strlen($codigo_postal)==5 AND preg_match('/[0-9]{5}/', $codigo_postal)){
		$codigo=true;
	}else{
		$codigo=false;
	}
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		 $valido=true;
	}else{
		$valido=false;
	}
	if(strlen($nombre)<1 || preg_match('/[0-9]{1}/',$nombre) || strlen($apellidos)<1 || preg_match('/[0-9]{1}/',$apellidos)){
		$datos=false;
	}else{
		$datos=true;
	}
		if( $valido AND $datos AND $codigo AND $tel){
			$nuevo_cliente=Array("nombre" => "{$nombre}",
								"apellidos" => "{$apellidos}",
								"sexo" => "{$sexo}",
								"documento" => "{$dni}",
								"nacimiento" => "{$nacimiento}",
								"direccion"=>"{$direccion}",
								"codigo_postal"=>$codigo_postal,
								"telefono"=>$telefono,
								"telefono2"=>$telefono2,
								"correo_electronico"=>"{$email}",
								"nota"=>"{$nota}");
					$this->db->insert("cliente",$nuevo_cliente);
					return true;
				}else{
				  return false;
				}	

}

function Actualizar($id,$direccion,$codigo_postal,$telefono,$telefono2,$email,$nota){

 	if(strlen($telefono)>=9  || strlen($telefono)<=12 AND preg_match('/[6|7|9][\s|\-|\.]?([0-9][\s|\-|\.]?){8}$/',$telefono) AND 
		strlen($telefono2)>=9  || strlen($telefono2)<=12 AND preg_match('/[6|7|9][\s|\-|\.]?([0-9][\s|\-|\.]?){8}$/',$telefono2)){
		$tel=true;
	}else{
		$tel=false;
		
	}
	if(strlen($codigo_postal)==5 AND preg_match('/[0-9]{5}/', $codigo_postal)){
		$codigo=true;
	}else{
		$codigo=false;
	}
	if($codigo){

		$actualizar_cliente=Array("direccion" => "{$direccion}",
									"codigo_postal" => $codigo_postal,
									"telefono" => $telefono,
									"telefono2" => $telefono2,
									"correo_electronico" => "{$email}",
									"nota" => "{$nota}");
		$this->db->where("ID",$id)->update("cliente", $actualizar_cliente);
		return true;

	}
}
	function Eliminar_cliente($id){
			$this->db->where("ID",$id)->delete("cliente");
			if($this->db->affected_rows()>0){
				return true;
			}else{
				return false;
			}

	}
	function listar_clientes(){
		$resultado=$this->db->order_by("nombre","asc")->get("cliente");
		$resultado=$resultado->result_array();
		return $resultado;



	}
	function buscar_cliente($cliente){
		$cliente=$this->db->like("nombre","{$cliente}")->get("cliente");
		$cliente=$cliente->result_array();
		return $cliente;
	}
	function mirar_cliente($id){
		$cliente=$this->db->where("ID",$id)->get("cliente");
		$cliente=$cliente->row_array();
		return $cliente;	
	}










}

?>