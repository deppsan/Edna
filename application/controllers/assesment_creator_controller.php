<?php
/**
 *
 */
class assesment_creator_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model("create_assessment_model");

    }

    public function index(){




        $this->load->view('assesment_view_header');
        $this->load->view('assesment_view_sidebar');
        $this->load->view('assesment_creator_content');
        $this->load->view('assesment_view_footer');

    }

    /*public function createAssessment(){

        $data = $this->input->post();



        print_r($data);
        echo "<br>";
        print_r($data['cmbCategory']);
    }*/


    public function getCategoryArray(){
        $data = $this->create_assessment_model->getCategory();

        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function getSubCategoryArray(){

        $data['post'] = $this->input->post();

        $result = $this->create_assessment_model->getSubCategory($data['post']);

        header('Content-Type: application/json');
        echo json_encode($result);
    }
}

?>