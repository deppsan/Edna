<?php
	/**
	 * Class to create Assessments for the SKILL addition.
	 * Creator		: Ricardo Alberto Chi García
	 * Create Date	: April 4 2014
	 * Modified by	: Ricardo Alberto Chi García
	 * Last UpDate	: April 4 2014
	 */
	
    class AssessmentAddition extends AssessmentOperationGenerator{
    	
		private $generator;
		private $assessment;
		
		public function AssessmentAddition($type,$skill,$exerciseAmount,$assessmentDuration,$numberLong){
			$this->generator = new AssessmentOperationGenerator($type,$skill,$exerciseAmount,$assessmentDuration,$numberLong);
			
			$assessment = $this->generator->getAssesment();
			
		}
		
		public function getAssessment(){
			return $this->assessment;
		}
		
		
    } 
?>