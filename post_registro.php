<?php

    require_once 'bd_conexion.php';


      $nombre = ['nombre'];
      $apellido = isset($_POST['apellido']);
      $mail = isset($_POST['mail']);
      $pass = isset($_POST['pass']);
      $pass_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]);

    $query = "INSERT INTO usuarios VALUES (NULL, '$nombre', '$apellido', '$mail', '$pass_segura', 1)";
    var_dump($query);
    die();
    $guardar = mysqli_query($conexion, $query);

    header('Location: index.php');
?>
