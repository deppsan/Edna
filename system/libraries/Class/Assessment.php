<?php
	/**
	 * Entity class that would be the template of the Assessments.
	 * Creator		: Ricardo Alberto Chi García
	 * Create Date	: April 3 2014
	 * Last UpDate	: April 4 2014
	 */
	class Assessment{
		private $type;
		private $content = array();
		private $assessmentDuration;
		private $skill;
		
		public function Assessment($paramType,$paramAssessmentDuration,$paramSkill){
			$this->type	 			 = 	$paramType;
			$this->assasmentDuration =	$paramAssessmentDuration;
			$this->skill 			 =	$paramSkill;
		}
		public function Assessment(){
			
		}
		
		public function getType(){
			return $this->type ;
		}
		
		public function setType($type){
			$this->type = $type;
		}
		
		public function getContent(){
			return $this->content ;
		}
		
		public function setContent($content){
			$this->content[] = $content;
		}
		
		public function getAssessmentDuration(){
			return $this->assessmentDuration ;
		}
		
		public function setAssessmentDuration($assessmentDuration){
			$this->assessmentDuration = $assessmentDuration;
		}
		
		public function getSkill(){
			return $this->skill ;
		}
		
		public function setSkill($skill){
			$this->skill = $skill;
		}
		
	}
?>