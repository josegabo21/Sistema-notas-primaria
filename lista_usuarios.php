<?php
require_once 'administrador/Tools/header.php';
require 'administrador/Tools/modelos/modelo_NuevoU_admin.php';
require 'administrador/Tools/modelos/modelo_NuevoU_profe.php';
require_once 'administrador/Tools/conexion.php';
require_once 'administrador/Tools/eliminar.php';
require_once 'administrador/Tools/eliminar_profe.php';
require_once 'administrador/Tools/modificar.php';
?>


<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-table"></i> Lista de usuarios </h1>
        
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="lista_usuarios.php">Lista de usuarios</a></li>
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
                onclick="nuevoUsuario()">Nuevo Usuario administrador</button>
                
                <button class="btn btn-success" type="button" 
                onclick="nuevoUsuarioProfe()">Nuevo Usuario Profesor</button>
                </div>
                
                  <thead>
                    <tr>
                      <th>ACCIONES</th>
                      <th>NOMBRE</th>
                      <th>USUARIO</th>
                      <th>ROL</th>
                    </tr>
                    
                  </thead>
                 
                  <tbody>
                    <?php
                      $sql= " SELECT * FROM usuarios_administrador WHERE ID ";

                      $resultado =  mysqli_query($conexion, $sql);
                      

                      while($mostrar = mysqli_fetch_array($resultado)){
                    ?>

                    <tr>
                      <td style="text-align:center">
                      <button href="modificar.php?id=<?=$mostrar['ID']?>" class="btn btn-primary" name="id_modificar" tittle="Editar" onclick=" ModificarUsuario_Admin()">Editar</button>
                      <button href="lista_usuarios.php?id=<?=$mostrar['ID']?>" class="btn btn-danger" tittle="Eliminar" onclick="advertencia(event)">Eliminar</button>
                      </td>
                      <td><?php echo $mostrar['nombre']?></td>
                      <td><?php echo $mostrar['usuario']?></td>
                      <td><?php echo $mostrar['rol']?></td>

                    </tr>

                    <?php   
                      }
                    
                    ?>
                  
                  <?php
                      $sql = "SELECT * FROM usuarios_profesor";

                      $resultado =  mysqli_query($conexion, $sql);
                      
                      while($mostrar = mysqli_fetch_array($resultado)){
                    ?>

                    <tr>
                      <td style="text-align:center">
                      <button class="btn btn-primary" tittle="Editar" >Editar</button>
                      <button href="lista_usuarios.php?id=<?=$mostrar['ID']?>" class="btn btn-danger" tittle="Eliminar" onclick="advertencia(event)">Eliminar</button>
                      </td>
                      <td><?php echo $mostrar['nombre']?></td>
                      <td><?php echo $mostrar['usuario']?></td>
                      <td><?php echo $mostrar['rol']?></td>
                      
                      
                  
                  
                  
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
