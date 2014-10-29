<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->helper('form'); 
		$this->load->library('form_validation');
		$this->load->model('oferta','modelo');
		$this->load->model('tienda','tienda');
		$this->load->model('contenido','contenido');
 	}	
 		  		
	function index(){
/*
		if('http://'.$_SERVER['SERVER_NAME'].'/'!=base_url().'index.php')
		Header('Location: '.base_url().'index.php');	
		if('http://'.$_SERVER['HTTP_HOST'].'/'!=base_url().'index.php')
		Header('Location: '.base_url().'index.php');*/

		$this->db->select('provincia');
		$this->db->distinct();
		$this->db->from('default_mapa');
		$this->db->order_by('provincia','asc');
		$data['provincias'] = $this->db->get()->result();		
		$data['campos']=$this->modelo->getCampo();		
		$data['cargos']=$this->modelo->getCargo();
		$data['departamentos']=$this->modelo->getCargoDepto();		
		$data['novedades']=$this->tienda->getPromo_home();
		$data['contenidos']=$this->contenido->allContenido();
		$data['historia']=$this->contenido->allHistoria();		
		$data['promociones']=$this->tienda->getPromo_seccion();
		
		$data['menus']=$this->tienda->getPromo_menu();
		$this->load->view('templates/front/inicio',$data);
	}	
	
	function buscar_Menu($id){
		$data['menus']=$this->tienda->getMenu($id);
		echo json_encode($data['menus']);
	}
	
	function resultadoDepartamento($id){
		if ($id!="0")
		$data['registros']=$this->modelo->getAll_id($id);
		else
		$data['registros']=$this->modelo->get_AllOferta();
		$data['cargos']=$this->modelo->getCargo();
		$this->load->view('templates/front/registrOferta',$data);		
	}
	
	function resultadoOferta($id){
		$data['registro']=$this->modelo->get_Oferta($id);
		$data['cargos']=$this->modelo->getCargo();
		$data['campos']=$this->modelo->getCampo();
		$this->load->view('templates/front/ofertaDetalle',$data);		
	}
	
	function allOferta(){
		$data['registros']=$this->modelo->get_AllOferta();
		$data['cargos']=$this->modelo->getCargo();
		$this->load->view('templates/front/registrOferta',$data);
	}
	
	public function get_ciudad_by_provincia(){			
		$this->db->select('ciudad');	
		$this->db->distinct();	
		$this->db->from('default_mapa');
		$this->db->where(array('provincia' => $_POST['provincia']));
		$this->db->order_by('ciudad','asc');	
		$data['ciudades'] = $this->db->get()->result();	
		$this->load->view('templates/front/ciudades',$data);	
	}
	
	public function get_mapa(){	
		/*if (($_POST['servicios'][1]=="1") && ($_POST['servicios'][2]=="0"))
			$tipo2="111";
		
		if (($_POST['servicios'][2]=="1") && ($_POST['servicios'][1]=="0"))
			$tipo2="111";
			
		
		if (($_POST['servicios'][2]=="1") && ($_POST['servicios'][1]=="1"))
			$tipo2="111";
		else
			 $tipo2="111";*/ 
				
		$tipo1=$_POST['servicios'][0].$_POST['servicios'][1].$_POST['servicios'][2];		
		if ( $_POST['provincia'] !== '' ){
			$this->db->select('nombre, direccion, latitud,longitud,tipo');	
			$this->db->from('default_mapa');	
			$this->db->where(array('provincia' => $_POST['provincia']));
			$this->db->where("activo","1");			
			!($_POST['ciudad'] !== '') || $this->db->where( array( 'ciudad' => $_POST['ciudad'] ) );
			
			//$array = array(,$tipo2);
			$where = "(tipo='".$tipo1."' OR tipo='111')";
			$this->db->where($where);
			
			$data['datosMapa'] = $this->db->get()->result();
			//echo $this->db->last_query();											
			echo json_encode($data['datosMapa']);
		}	
	}
	
	function get_mapaCompleto(){		
		if ( $_POST['provincia'] !== '' ){
			$this->db->select('nombre, direccion, latitud,longitud,tipo');
			$this->db->from('default_mapa');
			$this->db->where(array('provincia' => $_POST['provincia']));
			$this->db->where("activo","1");
			!($_POST['ciudad'] !== '') || $this->db->where( array( 'ciudad' => $_POST['ciudad'] ) );
			$data['datosMapa'] = $this->db->get()->result();
			echo json_encode($data['datosMapa']);
		}		
	}
	
	function home(){
		$this->load->view('templates/front/inicio');		
	}
	
	function nosotros(){
		$this->load->view('templates/front/nosotros');
	}
	
	function super_g(){		
		$this->load->view('templates/front/super_g');
	}	
	
	function tiendas(){		
		$this->load->view('templates/front/tiendas');
	}	
	
	function lubricantes(){	
		$this->load->view('templates/front/lubricantes');
	}
	
	function encuentranos(){
		$this->load->view('templates/front/encuentranos');
	}
	
	function contacto(){
		$this->load->view('templates/front/contacto');
	}
	
	
	public function primax(){	
		$this->load->view( 'primax' );	
	}
	
	function contactoFormaNormal(){
		$this->load->library('email');
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = '172.18.120.12';
		$config['smtp_port']    = '25';
		$config['smtp_timeout'] = '4';
		$config['smtp_user']='mail@primax.com.ec';
		$config['smtp_pass']='pa$$w0rd';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; 
		$config['validation'] = TRUE; 
		$config['wordwrap'] = FALSE;
			
	        $this->email->initialize($config);
        	$this->email->from('mail@primax.com.ec', 'Contacto PRIMAX');
        	$this->email->to('jortiz@misiva.com.ec');
        	if (count($_POST) != 0)  {
			$data['informacion']=$_POST;
			$body=$this->load->view('templates/front/email',$data,TRUE);
			$this->email->subject("PRIMAX");
			$this->email->message($body);
			
			$this->email->send();		
			echo "1";
		} else {
			echo "2";
		}		
	}
	
	function contactoFormaHoja(){		
		$this->load->library('email');
		$config['protocol']    = 'smtp';
		$config['smtp_host']    = '172.18.120.12';
		$config['smtp_port']    = '25';
		$config['smtp_timeout'] = '4';
		$config['smtp_user']='mail@primax.com.ec';
		$config['smtp_pass']='pa$$w0rd';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE; 
		$config['wordwrap'] = FALSE;

		$this->email->initialize($config);
		$this->email->from('mail@primax.com.ec', 'Contacto PRIMAX');
		$this->email->to('seleccionenATIMASA@primax.com.ec');
	 	//$this->email->to('bherrera@misiva.com.ec');
		
		$data['informacion']=$_POST;			
		$body=$this->load->view('templates/front/email_hoja',$data,TRUE);
		$this->email->subject("PRIMAX - Oferta Laboral");
		$this->email->message($body);

		$this->email->attach($_POST['foto']);
		echo $this->email->send();
		echo "1";		
	}
	
	
function archivo($mensaje=''){
		$data['mensaje']=$mensaje;
		$data['script']="";
		$this->load->view('templates/front/carga_documento',$data);	
	}
		
	function check(){		
		$data['script']="";
		if(isset($_FILES['archivos'])){					
			$config['upload_path'] = './hoja/';
			$config['allowed_types'] = 'doc|docx|pdf';
			$config['max_size']	= '100000';
			$config['encrypt_name'] = FALSE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('archivos')){
				$error = array('error' => $this->upload->display_errors());
				echo $data['script']="<script>alert('Error... Al cargar documento - ".$error."');</script> ";
			}else{
				$upload=$this->upload->data();		
				$nombre=$upload['full_path'];
				$tipo=$upload["file_type"];
				echo $data['script']="
				<script>		
					parent.document.getElementById('foto').value='".$nombre."';
					parent.document.getElementById('foto').style.display = 'block';					
					//alert('El Archivo fue cargado correctamente...');
				</script>";
			}
		}
		$this->load->view('templates/front/carga_documento',$data);
	}
		

	function config_upload_imagen(){
		$config['upload_path']='./hoja/';
		$config['allowed_types']='doc|docx|pdf';
		$config['max_size']	= '100000';
		$this->load->library('upload',$config);
		$this->load->library('image_lib');
		$this->upload->initialize($config);
	}
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
