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
			$data = $this->input->post();
			
			$validacion = $this->login_model->validarUsuario($data['txtUserName'],$data['txtPassword']);

            if($validacion['validacion']){
                if($validacion['type']=="teacher"){
                    redirect(base_url()."index.php/assesment_creator_controller");
                }elseif($validacion['type']=="student"){
                    redirect(base_url()."index.php/student_dashboard_controller");
                }
			}else{
				redirect(base_url().'index.php/login/error/');
			}
			
		}
		
		public function coreValidacion(){
            $data['username']= $this->input->post("username");
            $data['password']= $this->input->post("password");
			
			$validacion = $this->login_model->validarUsuario($data['username'],$data['password']);

			header('Content-Type: application/json');
			if($validacion['validacion']){
				echo json_encode(array('validacion' => true));
			}else{
				echo json_encode(array('validacion' => false));
			}

		}
    }
?>