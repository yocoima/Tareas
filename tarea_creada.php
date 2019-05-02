<?php
include 'index.php';
include 'nav_bar.php';
?>

<?php
    session_start();

    $descripcion_= $_POST['descripcion'];
    $notas_= $_POST['notas'];
        
    require("bd_conexion.php");    
    
$consulta1=$conexion->query("INSERT INTO `tareas` (`nombre_tar`, `prioridad`, `tipo`, `nota`, `periodo`) 
                            VALUES ('$descripcion_', 'baja', 'hardware', '$notas_', '1');");                 
            
?>
<div class="container mt-5 shadow p-3 mb-5 bg-white rounded" >


  <div class="alert alert-primary" role="alert">
    Hora {{hora}}
    Fecha {{fech}}
  </div>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Tarea</th>
        <th scope="col">Clasificacion</th>
        <th scope="col">Importancia</th>
        <th scope="col">Periodo</th>
        <th scope="col">Notas</th>
        <th scope="col">Fecha</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr *ngFor = "let tarea of tareaList">
        <td>{{tarea.descripcion}}</td>
        <td>{{tarea.SeleccionClasificacion}}</td>
        <td>{{tarea.SeleccionImportancia}}</td>
        <td>{{tarea.SeleccionPeriodo}}</td>
        <td>{{tarea.notas}}</td>
        <td>{{tarea.fecha}}</td>
        <td>
          <i div style="font-size: 1.8rem; color:red" class="fas fa-exclamation-circle"></i>
        </td>
        <td>
          <button type="button" class="btn btn-success btn- btn-sm"(click)="realizado(tarea.key$)">Realizado</button>
          <button type="button" class="btn btn-danger btn- btn-sm" (click)="borrar(tarea.key$)">Eliminar</button>
        </td>
      </tr>
    </tbody>
  </table>


</div>
