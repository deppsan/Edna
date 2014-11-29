<?php
	/**
	 * Entity class that would be the template of the Assessments.
	 * Creator		: Ricardo Alberto Chi García
	 * Create Date	: April 3 2014
	 * Last UpDate	: November 28 2014
	 */
	class AssessmentDTO{
		
		private $subject;
		private $category;
		private $subCategory;
		private $specificSkill;		
		private $skill;
		private $type;
		private $content = array();
		private $assessmentDuration;
		private $exerciseAmount;
		private $feedBack = array(
			"correctAnswer" =>	"",
			"TotalScore"	=>	"",
			"review"		=>	"",
			"retake"		=>	""
		);
		
		public function AssessmentDTO($paramType,$paramAssessmentDuration,$paramSkill,$paramSubject,$paramCategory,$paramSubCategory,$paramExcerciseAmount){
			$this->type	 			= 	$paramType;
			$this->assasmentDuration=	$paramAssessmentDuration;
			$this->skill 			=	$paramSkill;
			$this->subject			=	$paramSubject;
			$this->category			=	$paramCategory;
			$this->subCategory		=	$paramSubCategory;
			$this->exerciseAmount	=	$paramExcerciseAmount;
		}
		
		public function __construct(){
		
		}
		
		
		public function setFeedBack($correctAnswer,$totalScore,$review,$retake){
			$this->feedBack["correctAnswer"] = $correctAnswer;
			$this->feedBack["TotalScore"] 	= $totalScore;
			$this->feedBack["review"] 		= $review;
			$this->feedBack["retake"] 		= $retake;
		}
		
		public function getFeedBack(){
			$this->feedBack;
		}
		
		public function setSpecificSkill($specificSkill){
			$this->specificSkill = $specificSkill;
		}
		
		public function getSpecificSkill(){
			return $this->specificSkill;
		}
		
		public function setCategory($category){
			$this->category = $category;
		}
		
		public function getCategory(){
			return $this->category;
		}
		
		public function setSubCategory($subCategory){
			$this->subCategory = $subCategory;
		}
		
		public function getSubCategory(){
			return $this->subCategory;
		}
		
		public function getType(){
			return $this->type ;
		}
		
		public function setExerciseAmount($exerciseAmount){
			$this->exerciseAmount = $exerciseAmount;
		}
		
		public function getExerciseAmount(){
			return $this->exerciseAmount;
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
		
		public function setSubject($subject){
			$this->subject = $subject;
		}
		
		public function getSubject(){
			return $this->subject;
		}
		
	}
?>