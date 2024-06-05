<?php
require_once 'administrador/Tools/header.php';
require_once 'administrador/Tools/conexion.php';
require_once  './grados/registro_3erGrado.php';
require_once './grados/eliminar_usuario3erGrado.php';
require_once 'administrador/Tools/modificar.php';
?>


<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-table"></i> Lista de estudiantes 3er Grado </h1>
        
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="1er_grado.php">Lista de estudiantes 3er Grado</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="table_usuarios" style="text-align:center">
                <div>
                <button class="btn btn-success" type="button" 
                onclick="ModificarUsuario_3erGrado()">Nuevo Estudiante</button>
                
                
                  <thead>
                    <tr>
                      <th>ACCIONES</th>
                      <th>NOMBRE</th>
                      <th>EDAD</th>
                      <th>UBICACION</th>
                      <th>FECHA DE NACIMIENTO</th>
                      <th>FECHA DE REGISTRO</th>
                    </tr>
                    
                  </thead>
                 
                  <tbody>
                    <?php
                      $sql= " SELECT * FROM estudiantes_tercerGrado ";

                      $resultado =  mysqli_query($conexion, $sql);
                      

                      while($mostrar = mysqli_fetch_array($resultado)){
                    ?>

                    <tr>
                      <td style="text-align:center">
                      <button href="modificar.php?id=<?=$mostrar['ID']?>" class="btn btn-primary" name="id_modificar" tittle="Editar" onclick=" ModificarUsuario_Admin()">Editar</button>
                      <button href="4to_grado.php?id=<?=$mostrar['ID']?>" class="btn btn-danger" tittle="Eliminar" onclick="advertencia(event)">Eliminar</button>
                      </td>
                      <td><?php echo $mostrar['nombre']?></td>
                      <td><?php echo $mostrar['edad']?></td>
                      <td><?php echo $mostrar['direccion']?></td>
                      <td><?php echo $mostrar['fecha_nacimiento']?></td>
                      <td><?php echo $mostrar['fecha_registro']?></td>
                    </tr>

                    <?php   
                      }
                    
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</main>

<?php
require_once 'administrador/Tools/footer.php';
?>
