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


        return $subCategory;

    }

    Public function getSkill($data){

        if($data['subCategory'] == 1){
            $skill = array(
                "Addition - Simple",
                "-----------------",
                "Adding On Digit to Two Digits",
                "Number Bonds",
                "Doubles",
                "Add By and Skip Counting",
                "-----------------",
                "Word Problems",
                "Place Value"
        );
        }


        return $skill;

    }




}
?>