<?php
 class Producto extends CI_Model{

 	function producto_nuev($titulo,$tipo,$precio,$year,$director,$minutos,$sipnosis){
 		if(  strlen($year)==4){
 			$anho=true;
 		}else{
 			$anho=false;
 		}

 		if($anho){
 			$insertar_pro=Array("titulo"=>"{$titulo}",
 								"tipo"=>"{$tipo}",
 								"precio"=>$precio,
 								"year"=>$year,
 								"director"=>"{$director}",
 								"minutos"=>$minutos,
 								"sinopsis"=>"{$sipnosis}");
 			$this->db->insert("producto",$insertar_pro);
 			if($this->db->affected_rows()>0){
 			return true;
 			}
 		}else{
 			return false;
 		}

 	}

 	function editar_producto($id,$titulo,$precio,$year,$director,$minutos,$sipnosis){

 		if( strlen($year)==4){
 			$anho=true;
 		}else{
 			$anho=false;
 		}

 		if($anho){
 			$editar_pro=Array("titulo"=>"{$titulo}",
 								"precio"=>$precio,
 								"year"=>$year,
 								"director"=>"{$director}",
 								"minutos"=>$minutos,
 								"sinopsis"=>"{$sipnosis}");
 			$this->db->where("ID",$id)->update("producto", $editar_pro);
 			
 			return true;
 			
 		}else{
 			return false;
 		}
 	}
 	function eli_producto($id){

 		$this->db->where("ID",$id)->delete("producto");
 		if($this->db->affected_rows()>0){
 			return true;
 		}else{
 			return false;
 		}

 	}
 	function nueva_copia($id_producto){
 		$fecha=date("y-m-d");
 		$array=array("ID_producto"=>$id_producto,
 					"fecha"=>$fecha);
 		$this->db->insert("copia",$array);
 		return true;

 	}
 	function nuev_producto_genero($id_genero,$id_producto){
 		$array=array(
 		        "ID_genero" => $id_genero,
 		    	"ID_producto" => $id_producto);
 		$this->db->insert("producto_genero",$array);
 		if($this->db->affected_rows()>0){
 			return true;
 			}
 		else{
 			return false;
 		}
 	}
 	function nuevo_genero($genero){
 		$array=array(
 		        "nombre"=>"{$genero}");
 		$this->db->insert("genero",$array);
 		if($this->db->affected_rows()>0){
 			return true;
 			}
 		else{
 			return false;
 		}
 	}
 	function editar_genero($genero,$id){
 		$editar=array(
 					"nombre"=> "{$genero}");
 		$this->db->where("ID",$id)->update("genero",$editar);
 		
 			return true;
 	}
 	function lis_genero(){
 		$genero=$this->db->order_by("ID","desc")->get("genero");
 		$genero=$genero->row_array();
 		return $genero;


 	}
 	function unir_producto_genero(){
 		$id_pro=$this->db->order_by("ID","desc")->get("producto");
 		$id_pro=$id_pro->row_array();
 		return $id_pro;
 	}
 	function buscar_peliculas($palabra){
 		$peliculas=$this->db->select("producto_genero.ID_genero, genero.nombre")->join("genero","producto_genero.ID_genero = genero.ID","left")->where("tipo","pelicula")->like('titulo',"{$palabra}")->select("producto_genero.ID_producto, producto.titulo,tipo")->join("producto","producto_genero.ID_producto = producto.ID","left")->get("producto_genero");
 		$peliculas=$peliculas->result_array();
 		return $peliculas;
 		
 	}
 	function peliculas(){
 		$peliculas=$this->db->select("producto_genero.ID_genero, genero.nombre")->join("genero","producto_genero.ID_genero = genero.ID","left")->where("tipo","pelicula")->select("producto_genero.ID_producto, producto.titulo,tipo")->join("producto","producto_genero.ID_producto = producto.ID","left")->get("producto_genero");
 		$peliculas=$peliculas->result_array();
 		return $peliculas;
 	}
 	function ver_pelicula($id){
 		$pelicula=$this->db->select("producto_genero.ID_genero, genero.nombre")->join("genero","producto_genero.ID_genero = genero.ID","left")->where("producto.ID",$id)->select("producto_genero.ID_producto, producto.ID,titulo,tipo,precio,year,director,minutos,sinopsis")->join("producto","producto_genero.ID_producto = producto.ID","left")->get("producto_genero");
 		$pelicula=$pelicula->row_array();
 		return $pelicula;
 	}
 	function lis_videojuego(){
 		$videojuego=$this->db->select("producto_genero.ID_genero, genero.nombre")->join("genero","producto_genero.ID_genero = genero.ID","left")->where("tipo","videojuego")->select("producto_genero.ID_producto, producto.titulo,tipo")->join("producto","producto_genero.ID_producto = producto.ID","left")->get("producto_genero");
 		$videojuego=$videojuego->result_array();
 		return $videojuego;
 	}
 	function videojuego($palabra){
 		$videojuego=$this->db->select("producto_genero.ID_genero, genero.nombre")->join("genero","producto_genero.ID_genero = genero.ID","left")->where("tipo","videojuego")->like('titulo',"{$palabra}")->select("producto_genero.ID_producto, producto.titulo,tipo")->join("producto","producto_genero.ID_producto = producto.ID","left")->get("producto_genero");
 		$videojuego=$videojuego->result_array();
 		return $videojuego;
 		
 	}
 	function perfil_videojuego($id){
 		$videojuego=$this->db->select("producto_genero.ID_genero, genero.nombre")->join("genero","producto_genero.ID_genero = genero.ID","left")->where("producto.ID",$id)->select("producto_genero.ID_producto, producto.ID,titulo,tipo,precio,year,director,minutos,sinopsis")->join("producto","producto_genero.ID_producto = producto.ID","left")->get("producto_genero");
 		$videojuego=$videojuego->row_array();
 		return $videojuego;
 	}
 	function listado_copias($id){
 		$copias=$this->db->where("producto.ID",$id)->select("producto.titulo,tipo, copia.ID,fecha,alquilado,estado")->join("copia","producto.ID = copia.ID_producto","left")->get("producto");
 		$copias=$copias->result_array();
 		return $copias;
 	}	
 	function borrar_copia($id){
 		$this->db->where("ID",$id)->delete("copia");
 		if($this->db->affected_rows()>0){
 			return true;
 		}else{
 			return false;
 		}
 	}
 	
 }


 //$this->db->select("*")->where("devuelto",0)->join("producto","alquiler.ID_producto = producto.ID","left" )->get("alquiler");
?>