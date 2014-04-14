<?php
	/**
	 * Class to create a random number, requested by an Assassment class.
	 * Creator		: Ricardo Alberto Chi García
	 * Create Date	: April 3 2014
	 * Last UpDate	: April 4 2014
	 */
	class GenerarNumeros{
		
		private $numero;
		
		/**
		 * Class constructor
		 */
		public function generarNumeros(){
			
		}
		/**
		 * Generate a number at random, the lenght of the number depend of the value of $amountDigit
		 * variable
		 */
		public static function generar($amountDigit){
			if($amountDigit == 1){
				
				$this->numero = rand(1,9);
				
			}elseif($amountDigit == 2){
				
				$this->numero = rand(1,99);
				
			}elseif($amountDigit == 3){
				
				$this->numero = rand(1,999);
				
			}elseif($amountDigit == 4){
				
				$this->numero = rand(1,9999);
				
			}
			return $this->numero;
		} 
	}


?>