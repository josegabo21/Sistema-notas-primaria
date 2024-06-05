<div class="modal fade" id="modalUsuarioProfe" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="tituloModal">Nuevo Usuario Profesor</h2>
      </div>
      <div class="modal-body">
        <form action="registroFormulario_profe.php" method="POST" id="formUsuarioProfe" name="formUsuarioProfe">
          <div class="mb-3">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombreProfe" id="nombreProfe">
          </div>
         
          <div class="mb-3">
            <label for="control-label">Usuario:</label>
            <input type="text" class="form-control" name="usuarioProfe" id="usuarioProfe">
          </div>

          <div class="mb-3">
            <label for="control-label">contraseña:</label>
            <input type="password" class="form-control" name="passProfe" id="passProfe">
          </div>

          <div class="mb-3">
            <label for="control-label">edad:</label>
            <input type="number" class="form-control" name="edadProfe" id="passProfe">
          </div>

          <div class="mb-3">
            <label for="control-label">cedula:</label>
            <input type="number" class="form-control" name="cedulaProfe" id="passProfe">
          </div>

          <div class="mb-3">
            <label for="control-label">Correo electronico:</label>
            <input type="email" class="form-control" name="correoProfe" id="passProfe">
          </div>

          <div class="mb-3">
            <label for="control-label">Telefono:</label>
            <input type="tel" class="form-control" name="telefonoProfe" id="passProfe">
          </div>

        
          <div class="mb-3">
              <label for="rol">Rol</label>
              <select class="form-control mb-3" name="rolProfe" id="rolProfe">
                  <option>Profesor</option>
              </select>
          </div>

          <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>