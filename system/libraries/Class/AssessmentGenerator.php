<?php
	/**
	 * Class to generate Assessment, have a general methods to create an assessment and would
	 * inherit this functions to the type classes.
	 * Creator		: Ricardo Alberto Chi García
	 * Create Date	: April 3 2014
	 * Modified by	: Ricardo Alberto Chi García
	 * Last UpDate	: April 4 2014
	 */
	include("OperationsExercisesGenerator.php");
	include("Assessment.php");
	class AssessmentGenerator{
		
		private $assessment;
		private $exerciseAmount;
		private $numberLong;
		private $exerciseCreator;
		
		/*
		 * Class Constructor.
		 * */
		public function AssessmentGenerator($data){
			$this->assessment 		=	new Assessment($data['type'], $data['assessmentDuration'], $data['skill']);
			$this->exerciseAmount 	=	$data['exerciseAmount'];
			$this->numberLong		=	$data['numberLong'];
			
			if($data['skill'] == 1 OR $data['skill'] == 2 OR $data['skill'] == 3 OR $data['skill'] == 4){
				$this->exerciseCreator	=	new OperationsExercisesGenerator($data['numberLong']);
			}else{
				//Hace otra clase de ejercicios
			}
		}
		
		/**
		 * Returns the Assessment created.
		 */
		public function getAssesment(){
			return $this->assessment;
		}
		
		/**
		 * Fill an assesment with an amount of excersice
		 */
		public function fillAssessment(){
			$excersice = array();			
			for ($i=0; $i < $this->exerciseAmount ; $i++) {
				$excersice["exercise".$i] = $this->exerciseCreator->makeExcercise($this->assessment->getSkill());		
			}
			print_r($excersice);
			$this->assessment->setContent($excersice);
		}
		
	}
?>