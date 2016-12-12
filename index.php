<?php 
/**
*
*
*	@author: Daniel Raya

*
*/

// Develover Mode
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

// Fitxer de Configuraciò
	require_once 'x.inc.php';

	use \X\Sys\Autoload;
	use \X\Sys\Core;
	$loader = new Autoload();
	$loader->register();

// Registre de namespace de ruta actual
	$loader -> AddNamespace('X\Sys', 'sys');

	Core::init(); //From Controller
 ?>