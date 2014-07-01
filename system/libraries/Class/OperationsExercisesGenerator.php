<?php
	 include("generarNumeros.php");
	class OperationsExercisesGenerator{
		
		private $exercise = array();
		private $numberGenerator;
		private $numberLenght;
		
		public function OperationsExercisesGenerator($lenght){
			$this->numberGenerator 	= 	new GenerarNumeros();
			$this->numberLenght 	=	$lenght;
			
		}
		
		/**
		 * Diccionario de Skills
		 * 1 = Suma
		 * 2 = Resta
		 * 3 = Multiplicacion
		 * 4 = Division
		 */
		 
		public function makeExcercise($skill){
				$value1 = $this->numberGenerator->generar($this->numberLenght);
				$value2 = $this->numberGenerator->generar($this->numberLenght);
				
				$this->exercise = array(
								"a" => $value1,
								"b" => $value2
				);
				if($skill == 1){//Seccion de Sumas
					$arrayResult = $this->addition($this->exercise);
					$this->exercise = array_merge($this->exercise,$arrayResult);
				}
				
				return $this->exercise;
				

		}
		
		function addition($arrayData){
			$result  = array(
				"result" => array_sum($arrayData)
			);			
			return $result;
		}
		
	}
?>