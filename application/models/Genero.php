<?php

class Genero extends CI_Model{


	function nuevo_genero($nombre){
		$insertar=array("nombre"=>"{$nombre}");

		$this->db->insert("genero",$insertar);

		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}



	}

		function editar_genero($ID_genero,$nombre){
			

			$this->db->set("nombre","{$nombre}")->where("ID",$ID_genero)->update("genero");

			if($this->db->affected_rows()>0){
				return true;
			}else{
			return false;
			}
		}
		function eliminar_genero($id_genero){
			$this->db->where("ID",$id_genero)->delete("genero");
			return true;

		}






}

?>
