<?php
    /**
     * 
     */
    class assesment_controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
			
        }
		
		public function index(){
			
			$data['type']				= 	1;
			$data['skill']				= 	1;
			$data['exerciseAmount']		=	5;
			$data['assessmentDuration']	=	"5";
			$data['numberLong']			=	1;
			
			$this->load->library('class/AssessmentGenerator',$data,'generator');
			
			
			$this->load->view('assesment_view_header');
			$this->load->view('assesment_view_sidebar');
			$this->load->view('assesment_view_content');
			$this->load->view('assesment_view_footer');
			
		}
    }
    
?>