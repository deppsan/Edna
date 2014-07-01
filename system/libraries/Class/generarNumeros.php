<?php
	/**
	 * Class to create a random number, requested by an Assassment class.
	 * Creator		: Ricardo Alberto Chi García
	 * Create Date	: April 3 2014
	 * Last UpDate	: April 4 2014
	 */
	class GenerarNumeros{
		
		private $numero = 1;
		
		/**
		 * Class constructor
		 */
		public function generarNumeros(){
			
		}
		/**
		 * Generate a number at random, the lenght of the number depend of the value of $amountDigit
		 * variable
		 */
		public function generar($amountDigit){
			if($amountDigit == 1){
				
				$number = rand(1,9);
				$this->setNumero($number);
				
			}elseif($amountDigit == 2){
				
				$number = rand(1,99);
				$this->setNumero($number);
				
				
			}elseif($amountDigit == 3){
				
				$number = rand(1,999);
				$this->setNumero($number);
				
			}elseif($amountDigit == 4){
				
				$number = rand(1,9999);
				$this->setNumero($number);
				
				
			}
			$numeroRegreso = $this->getNumero();
			
			return $numeroRegreso;
		} 
		
		public function setNumero($numero){
			$this->numero = $numero;
		}
		
		public function getNumero(){
			return $this->numero;
		}
	}


?>