<?php
class login_model extends CI_Model{
	public function construct(){
	    parent::__construct();
	} 
	
	public function validarUsuario($data){
	    $validacion = [];
		
		/**
		 * Hacer cosas de validar en DB el usuario.
		 */
		 
		//Codigo que se quitara al habilitar la DB.
		if($data['txtUserName'] == "maestro" && $data['txtPassword'] == "maestro1234"){				
			$validacion['type'] = 'teacher';
		}elseif($data['txtUserName'] == "estudiante" && $data['txtPassword'] == "estudiante1234"){							
			$validacion['type'] = 'student';
		}else{
			$validacion = false;
		}
		return $validacion;
	}	
} 
?>