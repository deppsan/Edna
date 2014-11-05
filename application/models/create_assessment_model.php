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
                array("name" => "Simple Addition", "example" => "5 + 3 = 8"),
                /*"-----------------",*/
                array("name" => "Adding One Digit to Two Digits", "example" => "12 + 5 = 8"),
                array("name" => "Number Bonds", "example" => ""),
                array("name" => "Doubles", "example" => ""),
                array("name" => "Add By...(Skip Counting)", "example" => ""),
                /*"-----------------",*/
                array("name" => "Word Problems", "example" => ""),
                array("name" => "Place Value", "example" => "")
        );
        }
        return $skill;



    }

    Public function getSpeSkill($data){

        if($data['skill'] == 4){
            $skill = array(
                "Adding Doubles",
                "Adding Doubles + 1",
                "Adding Doubles - 1",
                "Find the Doubles"
            );
        }
        else if ($data['skill'] == 5){
            $skill = array(
                "0, 1, 2, 3...",
                "Tens, Hundreds or Thousands"

            );
        }
        else if ($data['skill'] == 3){
                $skill = array(
                    "Building and Equation",
                    "Missing Addends"
                );

        }
        else if ($data['skill'] == 6){
                $skill = array(
                    "Model Equation based on Word Problems",
                    "Solve Equation"
                );

        }

        return $skill;

    }




}
?>