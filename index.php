<?php  

require_once 'config/global.php';
require_once 'core/ControladorBase.php';
require_once 'core/Controlador.func.php';
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', 'http://localhost/mvc/');
require_once 'core/Autoload.php';

core\Autoload::run();

if (isset($_GET["controller"])) {
	$controllerObj = core\cargarControlador($_GET["controller"]);
	core\lanzarAccion($controllerObj);
}
else{
	$controllerObj = core\cargarControlador(CONTROLADOR_DEFAULT);
	core\lanzarAccion($controllerObj);
}

?>