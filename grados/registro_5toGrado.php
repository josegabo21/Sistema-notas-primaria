<div class="modal fade" id="5toGrado_modalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="tituloModal">Nuevo Usuario estudiante 5to Grado</h2>
      </div>
      <div class="modal-body">
        <form action="tabla_5toGrado.php" method="POST" id="formUsuario" name="formUsuario">
          <div class="mb-3">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre_5toGrado" id="nombre_5toGrado">
          </div>
         
          <div class="mb-3">
            <label for="control-label">edad:</label>
            <input type="text" class="form-control" name="edad_5toGrado" id="edad_5toGrado">
          </div>

          <div class="mb-3">
            <label for="control-label">Dirección:</label>
            <input type="txt" class="form-control" name="direccion_5toGrado" id="direccion_5toGrado">
          </div>
        
          <div class="mb-3">
              <label for="rol">Fecha de nacimiento:</label>
              <input type="date" class="form-control" name="fecha_nacimiento_5toGrado" id="fecha_nacimiento_5toGrado">
          </div>

          <div class="mb-3">
              <label for="rol">Fecha de registro:</label>
              <input type="date" class="form-control" name="fecha_registro_5toGrado" id="fecha_registro_5toGrado">
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