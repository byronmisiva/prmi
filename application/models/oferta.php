<?php
class Oferta extends CI_Model{
	
	function __construct(){
		parent::__construct();		
	}	
		 
	 function getAll_id($id){
	 	$this->db->select('id,cargo,ciudad,date(creado) as creado');		
		$this->db->where('cargo',$id);
		$consulta=$this->db->get("oferta_labotal");
		return $consulta->result();		
	 }
	 	 
	 function get_AllOferta(){
	 	$this->db->select('id,cargo,ciudad,date(creado) as creado');
	 	$this->db->where("activo","1");
	 	$consulta=$this->db->get("oferta_labotal");
	 	return $consulta->result();	 	
	 }
	 
	 function get_Alllista(){
	 	$consulta=$this->db->get("lista");
	 	return $consulta->result();
	 }
	 
	 function get_Oferta($id){	 	
	 	$this->db->where('id',$id);
	 	$this->db->where("activo","1");
	 	$consulta=$this->db->get("oferta_labotal");
	 	return current($consulta->result());
	 }
	 	 
	 
	 function getCargo(){
	 	$this->db->get('cargo');
	 	$consulta=$this->db->get('cargo');
	 	$servicio=array(''=>'Cargo Laboral');
	 	foreach ($consulta->result() as $row)
	 		$servicio[$row->id]=$row->nombre;
	 	return $servicio;	 	
	 }
	 
	function getCargoDepto(){
	 	$this->db->get('cargo');
	 	$consulta=$this->db->get('cargo');
	 	$servicio=array('0'=>'Ver Todos');
	 	foreach ($consulta->result() as $row)
	 		$servicio[$row->id]=$row->nombre;
	 	return $servicio;	 	
	 }
	 
	 function getCampo(){
	 	$this->db->get('campo');
	 	$consulta=$this->db->get('campo');
	 	$servicio=array(''=>'Campo Profesional');
	 	foreach ($consulta->result() as $row)
	 		$servicio[$row->id]=$row->nombre;
	 	return $servicio;
	 }
	 
}
















