<?php
include 'index.php';
include 'bd_conexion.php';
include 'nav_bar.php';
include 'combos.php';

?>

<script language="javascript" src="js/jquery-3.1.0.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
<script language="javascript">
      $(document).ready(function(){
        $("#clasificacion").change(function () {
 
          $("#clasificacion option:selected").each(function () {
            id_tipo_tarea = $(this).val();
            $.post('curso/gestor_de_tareas/gestor_tareas_php/combos.php', { id_tipo_tarea: id_tipo_tarea }, function(data){
              $("#clasificacion").html(data);
            });            
          });
        })
      });
      
      
</script>

<div class="container formNewTarea shadow p-3 mb-5 bg-white rounded">
  <form method="POST" action="curso/gestor_de_tareas/tarea_creada.php">
     <div class="">
      <div class="form-group col">

        <h5>Nueva Tarea</h5>

        <br>
      </div>
    </div>

      <!-- Tarea -->
    <div class="">
      <div class="form-group col">
        <label for="descripcion">Nombre la tarea</label>
        <input
        type="text"
        class="form-control"
        name="descripcion"
        placeholder="Tarea"
        >
      </div>
    </div>  

    <!-- Notas -->
    <div class="">
      <div class="form-group col">
        <label for="notas">Notas</label>
        <input
        type="text"
        class="form-control"
        name="notas"       
        placeholder="Notas"
        >
      </div>
    </div>
    </form>
      <!-- clasificacion -->
     <form method="POST" action="curso/gestor_de_tareas/gestor_tareas_php/combos.php"> 
      <div class="">
        <div class="form-group col">
          <label for="clasificacion">Clasificacion</label>
          <select class="form-control" name="clasificacion" id="clasificacion">
            <option value="0">Seleccionar la Clasificacion</option>

        
              <?php while($row = $consulta2->fetch_assoc()) { ?>
                <option value="<?php echo $row['id_tipo_tarea']; ?>"><?php echo $row['descripcion_tarea']; ?></option>
              <?php } ?>
          </select>
        </div>
      </div>
</form>
      <!-- Clasificacion -->

     <!--  <div class="form-group col">
        <label for="clasificacion">Clasificacion</label>
        <select class="clasificacion" name="SeleccionClasificacion" [value]="clasificacion"
        [(ngModel)]="SeleccionClasificacion" class="form-control">
          <option value="">Seleccione...</option>
          <option *ngFor="let clasificacion of ComboClasificacion" >
          {{clasificacion}}
          </option>
        </select>
      </div> -->
        <!-- Importancia -->
      <!-- <div class="form-group col">
        <label for="importancia">Importancia</label>
        <select class="importancia" name="SeleccionImportancia" [value]="import"
        [(ngModel)]="SeleccionImportancia" class="form-control">
          <option value="">Seleccione...</option>
          <option *ngFor="let import of ComboImportancia">
          {{import}}
          </option>
        </select>
        </div> -->
        <!-- Periodo -->
     <!--  <div class="form-group col">
        <label for="periodo">Periodo</label>
        <select class="periodo" name="SeleccionPeriodo" [value]="perio"
        [(ngModel)]="SeleccionPeriodo" class="form-control">
          <option value="">Seleccione...</option>
          <option *ngFor="let perio of ComboPeriodo" >
          {{perio}}
          </option>
        </select>
        </div>
    </div> -->


<!-- estado -->
   <!--  <div class="">
      <div class="form-group col">
        <input
        type="hidden"
        class="form-control"
        name="estado"
        >
      </div>
    </div> -->

    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-3">Crear</button>
      <button type="reset" class="btn btn-secondary" (click)="resetForm(newTarea)" >Reset</button>
    </div>
  
</div>