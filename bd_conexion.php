<?php
   $BDsrv='127.0.0.1';
   $BDuser='root';
   $BDpass='Google1875';
   $BDname='gestor_tareas';
   $conexion= mysqli_connect($BDsrv,$BDuser,$BDpass,$BDname);
   mysqli_query($conexion, "SET NAMES 'utf8'");
    if(mysqli_connect_errno()){
        echo "No se ha logrado conectar a la base de datos";
    }
    // mysqli_set_charset($conexion,"UTF8");
    // mysqli_select_db($conexion,$BDname) or die("Error");

    	session_start();

?>
