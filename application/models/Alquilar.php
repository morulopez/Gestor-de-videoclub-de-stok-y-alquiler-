 <?php

 class Alquilar extends CI_Model{

 	function alquiler_pelicula($id_copia,$id_producto,$id_cliente){
 		$fecha=date("y-m-d H:i:s");
 		$alquiler=array("ID_copia"=>$id_copia,
 						"ID_cliente"=>$id_cliente,
 						"ID_producto"=>$id_producto,
 						"fecha"=>$fecha);
 		$this->db->insert("alquiler",$alquiler);
 		$this->db->where("ID",$id_copia)->set("alquilado",1)->update("copia");
 		if($this->db->affected_rows()>0){
 			return true;
 		}else{
 			return false;
 		}
 	}
 	function listar_copia_alquilar($producto){
 		$copias_alquilar=$this->db->where("tipo","{$producto}")->where("copia.ID >", 0)->select("producto.titulo,tipo, copia.ID,ID_producto,fecha,alquilado,estado")->join("copia","producto.ID = copia.ID_producto","left")->get("producto");
 		$copias_alquilar=$copias_alquilar->result_array();
 		return $copias_alquilar;
 	}
 	function buscar_copia_alquilar($palabra,$tipo){
 		$copias_buscar=$this->db->like("titulo","{$palabra}")->where("copia.ID >", 0)->where("tipo","{$tipo}")->select("producto.ID,titulo, copia.ID,ID_producto,fecha,alquilado,estado")->join("copia","producto.ID = copia.ID_producto","left")->get("producto");
 		$copias_buscar=$copias_buscar->result_array();
 		return $copias_buscar;
 	}
 	function cambia_estado($id_copia,$estado){
 		if($estado=="mal_estado"){
 			$this->db->set("estado",0)->where("ID",$id_copia)->update("copia");
 			return true;
 		}elseif($estado=="buen_estado"){
 			$this->db->set("estado",1)->where("ID",$id_copia)->update("copia");
 			return true;
 		}

 	}
 	function devuelve($id_alquiler,$id_producto,$id_copia){

 		$this->db->set("devuelto",1)->where("ID",$id_alquiler)->update("alquiler");
 		$this->db->set("alquilado",0)->where("ID",$id_copia)->update("copia");
 		return true;

 	}
 	function sin_devolver($palabra){

 		$sin_devolver=$this->db->select("alquiler.ID,ID_cliente,alquiler.ID_producto,ID_copia,alquiler.fecha, cliente.nombre,apellidos,telefono, producto.titulo,tipo")->where("devuelto",0)->where("tipo","{$palabra}")->join("producto","alquiler.ID_producto = producto.ID","left" )->join("cliente", "alquiler.ID_cliente = cliente.ID","left")->join("copia" ,"alquiler.ID_copia = copia.ID","left")->get("alquiler");
 		$sin_devolver=$sin_devolver->result_array();
 		return $sin_devolver;

 	}
 	function producto_cliente_sin_devolver($id){
 		$sin_devolver=$this->db->select("alquiler.ID,ID_cliente,alquiler.ID_producto,ID_copia,alquiler.fecha, producto.titulo,tipo")->where("devuelto",0)->where("alquiler.ID_cliente",$id)->join("producto","alquiler.ID_producto = producto.ID","left" )->join("cliente", "alquiler.ID_cliente = cliente.ID","left")->join("copia" ,"alquiler.ID_copia = copia.ID","left")->get("alquiler");
 		$sin_devolver=$sin_devolver->result_array();
 		return $sin_devolver;
 	}



 	






 }

 ?>