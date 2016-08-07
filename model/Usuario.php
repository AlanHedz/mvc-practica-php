<?php  
namespace model;

use core\EntidadBase as EntidadBase;
 
class Usuario extends EntidadBase
{
	private $id, $nombre, $apellido, $email, $password, $user;

	public function __construct(){
		$table = "users";
		parent::__construct($table);
	}
	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
	}

    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
     
    public function getNombre() {
        return $this->nombre;
    }
 
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
 
    public function getApellido() {
        return $this->apellido;
    }
 
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function getPassword() {
        return $this->password;
    }
 
    public function setPassword($password) {
        $this->password = $password;
    }

    public function save()
    {
    	$query = "INSERT INTO users(id, nombre, apellido, user, email, password) "
    			. "VALUES (NULL," 
    			. "'".$this->nombre."',"
    			. "'".$this->apellido."',"
    			. "'".$this->user."',"
    			. "'".$this->email."',"
    			. "'".$this->password."')";
    	$save = $this->db()->query($query);
    	return $save;

    }


}

?>