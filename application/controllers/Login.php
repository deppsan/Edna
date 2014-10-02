<?php
    /**
     * 
     */
    class Login extends CI_Controller {
        
        function __construct() {
            parent::__construct();			
        }		
		function index(){
			$data['error']=false;	
			$this->load->view('Login_view',$data);
		}
		function error(){
			$data['error']=true;			
			$this->load->view('Login_view',$data);
		}
		
   }
    
?>