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
	class AssessmentGenerator extends Assessment{
		
		private $assessment;
		private $exerciseAmount;
		private $numberLong;
		private $exerciseCreator;
		
		/*
		 * Class Constructor.
		 * */
		public function AssessmentGenerator($type,$skill,$exerciseAmount,$assessmentDuration,$numberLong){
			$this->assessment 		=	new Assessment($type, $assessmentDuration, $skill);
			$this->exerciseAmount 	=	$exerciseAmount;
			$this->numberLong		=	$numberLong;
			
			if($skill == 1 OR $skill == 2 OR $skill == 3 OR $skill == 4){
				$this->exerciseCreator	=	new OperationsExercisesGenerator($numberLong);
			}else{
				
			}
		}
		
		/**
		 * Returns the Assessment created.
		 */
		public function getAssesment(){
			return $this->assessment;
		}
		private function fillAssessment(){			
			for ($i=0; $i < $this->exerciseAmount ; $i++) {
				$excersice = array(
							"exercise".$i => $this->exerciseCreator->makeExcercise($this->assessment->getSkill())
				);
				
			}
		}
		
	}
?>