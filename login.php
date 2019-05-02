<?php
  include 'index.php';
?>

<div class="card" id="card" style="width: 25rem;">

  <div class="card-body">
    <h5 class="card-title" style="text-align: center">Bienvenido</h5>
    <hr>
    <p class="card-text" style="text-align: center">Inicio de Sesion</p>
    <form method="POST" action="curso/gestor_de_tareas/gestor_tareas_php/post_login.php">
        <div class="form-group">
          <label for="mail">Direccion de correo</label>
          <input type="email" name="mail" class="form-control" id="mail" placeholder="Ingrese Correo">
          <br>
        <div class="form-group">
          <label for="pass">Contraseña</label>
          <input type="password" name="pass" class="form-control" id="pass" placeholder="Contraseña">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="recordar">
          <label class="form-check-label" for="recordar">Recordar</label>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar</button>
        <a href="registro.php" class="btn btn-primary">Registrarse</a>
      </form>

  </div>
</div>
