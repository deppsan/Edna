<?php
   class logon_controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
			
        }
		
		public function index(){
			
			$this->load->view('Login_view');
		}
		
		public function validar(){
			$username = $_POST['txtUserName'];
			$password = $_POST['txtPassword'];
			
			if($username == "maestro" && $password == "maestro1234"){				
				redirect(base_url()."index.php/assesment_controller");
			}
		}
    }
?>