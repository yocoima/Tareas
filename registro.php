<?php
  include 'index.php';
?>

<div class="card" id="card" style="width: 25rem;">

  <div class="card-body">
    <h5 class="card-title" style="text-align: center">Registro</h5>
    <hr>
    <p class="card-text" style="text-align: center">Ingrese sus datos</p>
    <form method="POST" action="post_registro.php">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre">


          <label for="apellido">Apellido:</label>
          <input type="text" name="apellido" class="form-control" placeholder="Ingrese su Apellido">


          <label for="mail">Direccion de correo:</label>
          <input type="email" name="mail" class="form-control" id="mail" placeholder="Ingrese Correo">


          <label for="pass">Contraseña</label>
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña">

        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="recordar">
          <label class="form-check-label" for="recordar">Recordar</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>

  </div>
</div>
