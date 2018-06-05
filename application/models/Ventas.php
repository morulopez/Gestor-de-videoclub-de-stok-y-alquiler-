<?php
class Ventas extends CI_Model{

	function nueva_venta($id_cliente,$precio,$descripcion){
		$fecha=date("y-m-d H:i:s");
		if(strlen($precio)==0 || strlen($descripcion)==0){
			return false;
		}
		$venta=array("ID_cliente"=>$id_cliente,
					"precio"=>$precio,
					"fecha"=>"{$fecha}",
					"description"=>"{$descripcion}");
		$this->db->insert("venta",$venta);
		return true;
	}

	function ultimas_cien(){

		$venta=$this->db->limit(100)->select("*")->join("cliente","venta.ID_cliente = cliente.ID","left")->order_by("fecha","desc")->get("venta");
		$venta=$venta->result_array();
		return $venta;

	}



}
?>
