<?php
require_once 'administrador/Tools/conexion.php'; 
require_once './configuracion_modificar.php';


$sql = "SELECT * FROM usuarios_administrador WHERE ID";
        $resultado = mysqli_query($conexion, $sql);
        $mostrar = mysqli_fetch_array($resultado);
?>


<div class="modal fade" id="ModificarmodalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="tituloModal">Modificar Usuario Administrador</h2>
      </div>
      <div class="modal-body">
        <form method="POST" id="formUsuario" name="formUsuario">
      
        <input type="hidden" name="id" value="<?= $mostrar['id'] ?>">

          <div class="mb-3">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombreModificar" id="nombre" value="<?= $mostrar['nombre'] ?>">
          </div>
         
          <div class="mb-3">
            <label for="control-label">Usuario:</label>
            <input type="text" class="form-control" name="usuarioModificar" id="usuario" value="<?= $mostrar['usuario'] ?>">
          </div>

          <div class="mb-3">
            <label for="control-label">contraseña:</label>
            <input type="password" class="form-control" name="passModificar" id="passModificar">
          </div>
          
          <div class="mostrar">
             <input id="verContraseña" type="checkbox" onclick="verpasswordModificar()" >Mostrar contraseña
         </div>
        
          <div class="mb-3">
              <label for="rol">Rol</label>
              <select class="form-control mb-3" name="rol" id="rol">
                  <option>Administrador</option>
              </select>
          </div>

          <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button name="btnModificar" type="submit" class="btn btn-primary" >Modificar</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>