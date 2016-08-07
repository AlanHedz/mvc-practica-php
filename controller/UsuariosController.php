<?php  
use core\ControladorBase as ControladorBase;
use model\Usuario as Usuario;
class usuariosController extends ControladorBase
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$usuario = new Usuario();
		$allusers = $usuario->getAll();

		$this->view("index", array(
			"allusers" => $allusers,
			"Hola" => "videoEjemplo de MVC",
		));
	}
	/*
	public function getAll(){
		$usuario = new Usuario();
		$allusers = $usuario->getAll();

		$this->view("index", array(
			"allusers" => $allusers,
			"Hola" => "videoEjemplo de MVC",
		));
	}*/

	public function crear(){
		if (isset($_POST["nombre"])) {
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$user = $_POST['user'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$usuario = new Usuario();
			$usuario->setNombre($nombre);
			$usuario->setApellido($apellido);
			$usuario->setEmail($email);
			$usuario->setUser($user);
			$usuario->setPassword($password);
			$save = $usuario->save();
		}
		$this->redirect("Usuarios", "index");
	}

	public function borrar(){
		if (isset($_GET['id'])) {
			$id = (int)$_GET['id'];
			$usuario = new Usuario();
			$usuario->deleteById($id);
			$this->redirect("Usuarios", "index");
		}
	}

}

?>