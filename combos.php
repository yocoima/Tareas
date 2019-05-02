<?php  
require("bd_conexion.php");

session_start();

	$clasificacion= $_POST['clasificacion'];

	$consulta2=$conexion->query("SELECT id_tipo_tarea, descripcion_tarea FROM tipo_tarea WHERE id_tipo_tarea = '$clasificacion' ORDER BY id_tipo_tarea");
	  //$html= "<option value='0'>Seleccionar Familia Codigo</option>";
	  
	  while($rowD = $consulta2->fetch_assoc()){
	            //$html.= "<option value='".$rowD['familia_id']."'>".$rowD['familia_id']."</option>";
	            $html.= $rowD['id_tipo_tarea'];
	  }
	  echo $html;

 ?>