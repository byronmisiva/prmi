<?php
class Tienda extends CI_Model{
	
	function __construct(){
		parent::__construct();		
	}	
		 
	
	
	
	 function getPromo_home(){
		//consulta home
		$query = $this->db->query("
				SELECT * FROM default_tienda
				WHERE NOW() BETWEEN `default_tienda`.`fecha_inicio`  AND `default_tienda`.`fecha_fin`  AND activo = 1 AND home = '1'
				UNION
				SELECT * FROM default_tienda
				WHERE NOW() > `default_tienda`.`fecha_inicio` AND ISNULL(fecha_fin) AND activo = 1 AND home = '1'
				ORDER BY orden;
				");
		/*
	 	$this->db->select('*');		
		$this->db->where("home","1");
		$this->db->where("activo","1");
		$this->db->order_by("orden","asc");
		$consulta=$this->db->get("default_tienda");*/
		return $query->result();		
	 }	  
	 
	 function getPromo_seccion(){/*
	 	$this->db->select('*');
	 	$this->db->where('tipo',"promocion");
	 	$this->db->where("activo","1");
	 	$this->db->where("home","0");
	 	$this->db->order_by("orden","asc");
	 	$consulta=$this->db->get("default_tienda");*/
	 	//consulta promociones
	 	$query = $this->db->query("SELECT *
			 	FROM default_tienda
			 	WHERE NOW() BETWEEN `default_tienda`.`fecha_inicio`  AND `default_tienda`.`fecha_fin`  AND activo = 1 AND tipo = 'promocion'
			 	UNION
			 	SELECT *
			 	FROM default_tienda
			 	WHERE NOW() > `default_tienda`.`fecha_inicio` AND ISNULL(fecha_fin) AND activo = 1 AND tipo = 'promocion'
			 	ORDER BY orden");
	 	
	 	return $query->result();
	 }
	 
	 function getPromo_menu(){
	 	//consulta menu
	 	$query = $this->db->query("SELECT * FROM default_tienda
	 	WHERE NOW() BETWEEN `default_tienda`.`fecha_inicio`  AND `default_tienda`.`fecha_fin`  AND activo = 1 AND tipo = 'menu'
	 	UNION
	 	SELECT * FROM default_tienda
	 	WHERE NOW() > `default_tienda`.`fecha_inicio` AND ISNULL(fecha_fin) AND activo = 1 AND tipo = 'menu'
	 	ORDER BY orden");
	 	
	 	/*
	 	$this->db->select('*');
	 	$this->db->where('tipo',"menu");
	 	$this->db->where("activo","1");
	 	$this->db->order_by("orden","asc");
	 	$consulta=$this->db->get("default_tienda");*/
	 	return $query->result();
	 }	 

	 function getMenu($id){
	 	$this->db->select('*');
	 	$this->db->where('tipo',"menu");
	 	$this->db->where("activo","1");
	 	$this->db->where("id",$id);	 	
	 	$consulta=$this->db->get("default_tienda");
	 	return current($consulta->result());	 	
	 }
	 
}
















