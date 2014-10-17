<?php
//include('../../system/libraries/class/Assessment.php');
class student_dashboard_controller extends CI_Controller {
        
        function __construct() {
            parent::__construct();
			
        }
		
		public function index(){
			$data['testReturn'] = FALSE;		
			$this->load->view('assesment_view_header');
			$this->load->view('assesment_view_sidebar');
			$this->load->view('student/dashboard_view_student',$data);
            $this->load->view('assesment_view_footer');
		}		
		
		public function test(){
			$testName = $_GET['test'];			
			
			$data['type']				= 	1;
			$data['skill']				= 	1;
			$data['exerciseAmount']		=	5;
			$data['assessmentDuration']	=	"5";
			$data['numberLong']			=	1;
			
			$this->load->library('class/AssessmentGenerator',$data,'generator');
			
			$this->generator->fillAssessment();
			
			$assessment = new Assessment();
			$assessment = $this->generator->getAssesment();

			$data['assessment'] = $assessment;
			$this->load->view('assesment_view_header');
			$this->load->view('assesment_view_sidebar');
			$this->load->view('student/execute_assessment_view',$data);
			$this->load->view('student/student_assessment_footer');
			
		}
		public function testReturn(){
			$data['testReturn'] = TRUE;
			$this->load->view('assesment_view_header');
			$this->load->view('assesment_view_sidebar');
			$this->load->view('student/dashboard_view_student',$data);
            $this->load->view('assesment_view_footer');
		}
    }

	

?>