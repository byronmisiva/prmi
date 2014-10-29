<?php
class Contenido extends CI_Model{
	
	function __construct(){
		parent::__construct();		
	}	
		 
	function allContenido(){	
		$this->db->select("*");	
		$consulta=$this->db->get("contenidos");		
		return $consulta->result();
	}
	
	function allHistoria(){
		$this->db->select("id,titulo,imagen");
		$this->db->where("activo","1");
		$this->db->order_by("orden","asc");
		$consulta=$this->db->get("historia");
		return $consulta->result();
	}
	 
}
















