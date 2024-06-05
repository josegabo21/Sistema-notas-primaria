<div class="modal fade" id="modalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="tituloModal">Nuevo Usuario Administrador</h2>
      </div>
      <div class="modal-body">
        <form action="registroFormulario_admin.php" method="POST" id="formUsuario" name="formUsuario">
          <div class="mb-3">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
         
          <div class="mb-3">
            <label for="control-label">Usuario:</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
          </div>

          <div class="mb-3">
            <label for="control-label">contraseña:</label>
            <input type="password" class="form-control" name="pass" id="pass">
          </div>
        
          <div class="mb-3">
              <label for="rol">Rol</label>
              <select class="form-control mb-3" name="rol" id="rol">
                  <option>Administrador</option>
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