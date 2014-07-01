<?php
    /**
     * 
     */
    class assesment_controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
        }
		
		public function index(){
			$this->load->view('assesment_view');
		}
    }
    
?>