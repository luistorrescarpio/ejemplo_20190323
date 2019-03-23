<?php 
include("lt_script/savefile64.php");

$obj = (object)$_REQUEST;

switch ($obj->action) {
	case 'subirArchivo':
		$fileName = savefile64("archivo", $obj->file64);
		echo "Proceso finalizado. ".$fileName;
		break;

	case 'action2':
		
		break;
}

?>
