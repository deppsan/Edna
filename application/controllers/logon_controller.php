<?php
   class logon_controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
			$this->load->model('login_model');
        }
		
		public function index(){
			
			$this->load->view('Login_view');
		}
		
		public function validar(){
			//$username = $_POST['txtUserName'];
			//$password = $_POST['txtPassword'];
			
			$data = $this->input->post();
			
			$validacion = $this->login_model->validarUsuario($data);
			if(!validacion){
				redirect(base_url().'index.php/login/error/');
			}elseif($validacion['type']=="teacher"){
				redirect(base_url()."index.php/assesment_controller");
			}elseif($validacion['type']=="student"){
				redirect(base_url()."index.php/student_dashboard_controller");
			}else{
				redirect(base_url().'index.php/login/error/');
			}
			
		}
		
		public function coreValidacion(){
			$data['txtUserName']= $this->input->post('username');
			$data['txtPassword']= $this->input->post('password');
			
			$validacion = $this->login_model->validarUsuario($data);
			print_r($validacion);
			header('Content-Type: application/json');
			if(!$validacion){
				echo json_encode(array('validacion' => false));
			}else{
				echo json_encode(array('validacion' => true));
			}
		}
    }
?>