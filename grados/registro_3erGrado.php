<div class="modal fade" id="3erGrado_modalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="tituloModal">Nuevo Usuario estudiante 3er Grado</h2>
      </div>
      <div class="modal-body">
        <form action="tabla_3erGrado.php" method="POST" id="formUsuario" name="formUsuario">
          <div class="mb-3">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre_3erGrado" id="nombre_3erGrado">
          </div>
         
          <div class="mb-3">
            <label for="control-label">edad:</label>
            <input type="text" class="form-control" name="edad_3erGrado" id="edad_3erGrado">
          </div>

          <div class="mb-3">
            <label for="control-label">Dirección:</label>
            <input type="txt" class="form-control" name="direccion_3erGrado" id="direccion_3erGrado">
          </div>
        
          <div class="mb-3">
              <label for="rol">Fecha de nacimiento:</label>
              <input type="date" class="form-control" name="fecha_nacimiento_3erGrado" id="fecha_nacimiento_3erGrado">
          </div>

          <div class="mb-3">
              <label for="rol">Fecha de registro:</label>
              <input type="date" class="form-control" name="fecha_registro_3erGrado" id="fecha_registro_3erGrado">
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