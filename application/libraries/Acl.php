<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
class Acl {	
	var $CI;
	var $base;
	var $config;
	var $inicialize;
	var $public_functions;
	var $default_rol;
	var $default_redirect;
	var $type;
	var $resources = array();
	var $roles = array();
	var $rules = array();
	var $users = array();
	var $current_user = array();
	
	
    function Acl(){
    	/* The Constructor of the ACL:
		 * 
		 * Create an array with the rules, resources and roles and inicialize the ACL
		 */ 
    	
    	$this->CI =& get_instance();
    	$this->CI->load->helper('url');
		$this->base=$this->CI->config->config['base_url'];
		include(APPPATH.'config/acl'.EXT);
		$this->public_functions=$public_functions;
		$this->default_rol=strtolower($default_rol);
		$this->default_redirect=strtolower($default);			
		$this->type=strtolower($type);		
        session_start();
		if(isset($data) and $this->inicialize!==true){
			if($type=='database'){
				$this->getData($data);		
				$this->users =$data['db_users'];
			}
			else{
				$this->config=$data;
				$this->users =$data['users'];
			}

			if(isset($this->config['roles']) and isset($this->config['resources']) and isset($this->config['rules'])){
				if(is_array($this->config['roles']) and is_array($this->config['resources']) and is_array($this->config['rules'])){
					$this->_inicialize();
					$this->inicialize=true;
				}
				else
					show_error('The config file did not have roles, resources or rules' );
			}
			
		}
		else
			show_error('The config file did not have configured');
		$this->current_user=$this->getCurrentUser();
    }
    
    
    function getData($data){
    	/* 
		 * Get the data from the database to inicialize the ACL
		 */ 
    	
    	//Get Roles from Database
    	if($this->CI->db->count_all_results($data['db_roles']['table_name'])>0){
    		$query=$this->CI->db->get($data['db_roles']['table_name']);
    		
    		foreach($query->result() as $row){
    			if($row->$data['db_roles']['data']['parent'] != "NULL")
    				$this->config['roles'][$row->id]=array('name'=>$row->$data['db_roles']['data']['name'],'parent'=>$row->$data['db_roles']['data']['parent']);
    			else
    				$this->config['roles'][$row->$data['db_roles']['data']['name']]=$row->id;
    		}
    	}
    	else{
    		show_error("The Table '".strtoupper($data['db_roles']['table_name'])."' doesn't have any values." );
    		exit(1);
    	}
    	
    	//Get Resources from Database
    	if($this->CI->db->count_all_results($data['db_resources']['table_name'])>0){
    		$query=$this->CI->db->get($data['db_resources']['table_name']);
    		foreach($query->result() as $row){
    			$this->config['resources'][$row->id]=array($row->$data['db_resources']['data']['controller'],$row->$data['db_resources']['data']['function']);
    		}	
    	}
    	else{
    		show_error("The Table '".strtoupper($data['db_resources']['table_name'])."' doesn't have any values." );
    		exit(1);
    	}
    	
    	//Get Rules from Database
    	if($this->CI->db->count_all_results($data['db_rules']['table_name'])>0){
    		$this->CI->db->order_by($data['db_rules']['data']['order'],'asc');
    		$query=$this->CI->db->get($data['db_rules']['table_name']);
    		foreach($query->result() as $row){
    			$this->config['rules'][]=array($row->$data['db_rules']['data']['resource_id'],$row->$data['db_rules']['data']['permission'],$row->$data['db_rules']['data']['role_id'],$row->$data['db_rules']['data']['forward']);
    		}	
    	}
    	else{
    		show_error("The Table '".strtoupper($data['db_rules']['table_name'])."' doesn't have any values." );
    		exit(1);
    	}
    }
    
    
    function _inicialize(){
        /**
         * Add roles and resources and rules.
         */
        foreach($this->config['roles'] as $key => $value)
       		$this->addRole($key,$value['name'],$value['parent']);

        /**
         * Add some resources
         */
    	foreach($this->config['resources'] as $key => $value)
       		$this->addResource($key,$value);
        
        /**
         * Set rules for Acl
         */
    	foreach($this->config['rules'] as  $value){
       		if(is_array($value)){
       			$this->addRule($value[2],$value[0],trim(strtolower($value[1])),trim(strtolower($value[3])));
       		}
        }
    
    }
    
       
    function getCurrentUser(){
    	/* 
		 * Get the Current User
		 */ 
    	$data['user']=$this->CI->session->userdata('username');
    	$data['role']=$this->CI->session->userdata('role');
    	$data['id']=$this->CI->session->userdata('userid');
    	$data['name']=$this->CI->session->userdata('first_name');
    	$data['sexo']=$this->CI->session->userdata('sex');
    	
    	return $data;
    	
    }

    
    function checkAcl($controller,$function="index",$redir=TRUE){
       	/* 
		 * Verify the permissions in the ACL structure
		 */ 
    	if(isset($this->config['resources']))
    	{
	    	//Chequeo que la funcion no este dentro de las funciones publicas
	    	if(array_search($function,$this->public_functions)===FALSE)
	    	{
	    		//Si el valor de funcion es vacio, el valor por default es INDEX
		    	if($function == "")
		    		$function="index";
		    	
		    	//Si no existe un session creada se crea una de visitante
		    	if ($this->CI->session->userdata('role')=="")
		    	{		    		
		            $rol['role'] = $this->recursiveArraySearch($this->default_rol,$this->roles);		            
		            $this->CI->session->set_userdata($rol);
		        }
		        else
		        	$rol['role'] = $this->CI->session->userdata('role');		        
		        //Check resources to find it 
		      	$key = array_search(array($controller,$function), $this->resources);
		      	if($key===FALSE){	
		      		$key = array_search(array($controller,'all'), $this->resources);
		      		if($key!==FALSE)
		      			$function='all';
		      	}		      	
		      	
		      	$mensaje="";
		    	$aproved=FALSE;
		    	if($key!==false){
		    		$mensaje.="Si hay recurso.<br>";
		    		$redirect=$this->isAllowed($rol['role'],$controller,$function);
		    		if($redirect===true){
		    			$mensaje.="Si tienes permiso.<br>";		    			
			        	$aproved=TRUE;
		    		}
		    		else{
			        	$mensaje.="No tienes permiso.<br>";			        	
			        	$aproved=FALSE;			        	
			        }	
			       	      		    			
		    	}
		    	else
		    		show_error("El recurso <i>'".$controller."/".$function."'</i> no existe");				
		        //Send the error messages to session-
		        $this->CI->session->set_userdata(array('mensaje'=>$mensaje));		        		        
				
		        if($aproved)
		        	return true;
		        else{
		        	
		        	if($redir){
		        		if($redirect!='default' && $redirect!="")		        		
			        		redirect($redirect);
			        	else			        
			        		redirect($this->default_redirect);
		        	}
		        	return false;
		        
		        }		        
	    	}
	    	else
	    		return true;
    	}
	    else
	    	return true;        	
    }
    
	
    function isAllowed($rol,$controller,$function){
		/* 
		 * Verify the rules and check the permissions
		 */ 
    	
		$roles=array();
		$this->getParents($rol,$roles);
		$roles=array_reverse($roles,false);
		
		//Check the explicit function to check the permissions
		if(isset($this->rules[$controller][$function]['rules'])){
			$rules=$this->rules[$controller][$function]['rules'];
			krsort($rules);
		}
		else			
			return false;
					
		$check=FALSE;
		foreach($rules as $key=>$value){
			foreach($roles as $rol){
				if($key==$rol){
					$check=TRUE;
					if(strtolower($value['value'])=='allow')
						return true;
					else
						return $value['forward'];
				}
			}
			if($function == 'all')
				return $value['forward'];
		}
		
		if($check===FALSE and $function!='all')
			return $this->isAllowed($rol,$controller,'all');
			
		return false;
	}
	
	
	private function getParents($rol_id,&$roles){
		if(isset($this->roles[$rol_id])){
			$rol=$this->roles[$rol_id];
			if($rol['parent']>0)
				$this->getParents($rol['parent'],$roles);
			$roles[]=$rol_id;
		}
	}
    
	
    private function addRole($value,$name,$parent=0){
    	/* 
		 * Add new roles
		 */ 
    	$this->roles[$value]=array('name'=>trim(strtolower($name)),'parent'=>$parent);
    }
        
    private function addResource($id,$value){
    	/* 
		 * Add new resources
		 */ 
    	if(is_array($value)){
    		$this->resources[$id]=$value;
    		$this->rules[$value[0]][$value[1]]=array('resource_id'=>$id,'rules'=>array());
    	}
    }
        
    private function addRule($role,$resource,$value,$forward){
    	/* 
		 * Add new rules
		 */ 
    	$res=$this->resources[$resource];
    	$this->rules[$res[0]][$res[1]]['rules'][$role]=array('value'=>$value,'forward'=>$forward);
    }
        
	function login($user,$pass){
		switch($this->type){
			case 'explicit':
					$key=$this->recursiveArraySearch($user,$this->users);					
					if($key!==false){
						if($pass==$this->users[$key][4]){
							$array_items = array('username' => '', 'role' => '','userid'=>'');
				    		$this->CI->session->unset_userdata($array_items);
				    		$data_to_session = array('userid'=>$key,'username'=> $user,'role'=> $this->users[$key][3]);
				    		$this->CI->session->set_userdata($data_to_session);
							return TRUE;
						}							
					}
				break;
				
			case 'database':
					$query=$this->CI->db->get_where(
											$this->users['table_name'],
											array(	
													$this->users['data']['user']=>$user,
													$this->users['data']['password']=>$pass,
													$this->users['data']['active']=>1));

					if($query->num_rows()== 1){
			    		$row=current($query->result());
			    		$array_items = array('username' => '', 'role' => '','userid'=>'');
			    		$this->CI->session->unset_userdata($array_items);
			    		
			    		$nick=$this->users['data']['user'];
			    		$role_id=$this->users['data']['role_id'];
			    		$data_to_session = array('userid'=>$row->id,'username'=> $row->$nick,'role'=> $row->$role_id);
			    		$this->CI->session->set_userdata($data_to_session);
			    		
			    		//Update the last login of the user
			    		$this->CI->db->where('id',$row->id);
			    		$this->CI->db->set($this->users['data']['last_login'],'NOW()',FALSE);
			    		$this->CI->db->update($this->users['table_name']);
			    		return TRUE;
			    	}
			    	return FALSE;
				break;
				
			default:
				return FALSE;
		}
		
    }
    
    function logout($url="welcome/login"){
    	$array_items = array('username' => '', 'role' => '','userid'=>'');
    	$this->CI->session->unset_userdata($array_items);
    	$key=$this->recursiveArraySearch($this->default_rol,$this->roles);
    	$data_to_session = array('userid'=>'0','username'=> 'guest','role'=> $key);
    	$this->CI->session->set_userdata($data_to_session);
    	redirect($url);
    }
    
    
    function debug($data){
     
    }
    
	function recursiveArraySearch($needle,$haystack) {
	    foreach($haystack as $key=>$value) {
	        $current_key=$key;
	        if($needle===$value OR ((is_array($value) or is_object($value)) && $this->recursiveArraySearch($needle,$value) !== false)) {
	            return $current_key;
	        }
	    }
	    return false;
	}
}
	

// END ACL Class

/* End of file Acl.php */
/* Location: ./application/libraries/Acl.php */