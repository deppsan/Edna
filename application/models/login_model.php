<?php
class login_model extends CI_Model{
	public function construct(){
	    parent::__construct();
	} 
	
	public function validarUsuario($paramUsuario,$parmContraseña){
	    $validacion = [];
        $validacion['validacion'] = false;
		
		/**
		 * Hacer cosas de validar en DB el usuario.
		 */
		 
		//Codigo que se quitara al habilitar la DB.
		if($paramUsuario == "maestro" && $parmContraseña == "maestro1234"){
			$validacion['type'] = 'teacher';
            $validacion['validacion'] = true;
		}elseif($paramUsuario == "estudiante" && $parmContraseña == "estudiante1234"){
			$validacion['type'] = 'student';
            $validacion['validacion'] = true;
		}
		return $validacion;

	}	
} 
?>