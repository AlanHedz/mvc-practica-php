<?php 
namespace model;
use core\ModelBase as ModelBase; 
	
class UsuarioModel extends ModelBase
{
	private $table;

	public function __construct($table){
		$this->table = "users";
		parent::__construct($this->table);
	}

	public function getUnUsuario(){
		$query = "SELECT * FROM users WHERE email='this.alan856@gmail.com'";
		$usuario = $this->ejecutarSql($query);
		return $usuario;
	}
}

?>