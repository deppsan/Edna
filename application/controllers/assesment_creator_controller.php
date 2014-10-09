<?php
/**
 *
 */
class assesment_creator_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    public function index(){




        $this->load->view('assesment_view_header');
        $this->load->view('assesment_view_sidebar');
        $this->load->view('assesment_creator_content');
        $this->load->view('assesment_view_footer');

    }

    public function createAssessment(){

        $data = $this->input->post();



        print_r($data);
        echo "<br>";
        print_r($data['cmbCategory']);
    }
}

?>