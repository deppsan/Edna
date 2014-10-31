<?php
/**
 * Created by PhpStorm.
 * User: LTrevino
 * Date: 10/20/14
 * Time: 6:58 PM
 */

class Create_assessment_model extends CI_Model{
    public function construct(){
        parent::__construct();
    }


    public function getCategory(){

        $category = array(
            "Add / Subtract / Multiply / Divide",
            "Mixed Operations"
        );

        return $category;
    }

    public function getSubCategory($data){

        if($data['category'] == 1){
            $subCategory = array(
                "Addition",
                "Subtraction",
                "Multiplication",
                "Division"
            );
        }
        else if($data['category'] == 2){
            $subCategory = array(
                "Addition and Subtraction",
            );

        }

        return $subCategory;

    }




}
?>