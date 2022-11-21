<form action="./include/modifUsuario.php" method="POST">
<input type="hidden" name="txtIdUsuarioModif" value = "<?php echo $fila['id_usuario']; ?>">
<!-- Modal MODIFICAR USUARIO-->
<div class="modal fade" id="modalModificarUsu<?php echo $fila['id_usuario']; ?>" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Modificar Usuario</h4>
      </div>
      <div class="modal-body">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese su nombre" name="txtNombreModif" value = "<?php echo $fila['nombre']; ?>">
        
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" placeholder="Ingrese su apellido" name="txtApellidoModif" value = "<?php echo $fila['apellido']; ?>">
        
            <label class="form-label">Documento</label>
            <input type="number" class="form-control" placeholder="Ingrese su documento" name="txtDocModif" value = "<?php echo $fila['documento']; ?>">
        
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Ingrese su email" name="txtEmailModif" value = "<?php echo $fila['email']; ?>">
        
            <label class="form-label">Usuario</label>
            <input type="text" class="form-control" placeholder="Ingrese su usuario" name="txtUsuarioModif" value = "<?php echo $fila['usuario']; ?>">
        
            <label for="inputPassword4" class="form-label">Clave</label>
            <input type="password" class="form-control" placeholder="Ingrese su clave" name="txtClaveModif" value = "<?php echo $fila['clave']; ?>">                      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </div>
    </div>
    
  </div>
</div>
</form>

<!-- Modal ELIMINAR USUARIO-->
<form action="./include/eliminarUsuario.php" method="POST">
<input type="hidden" name="txtIdUsuarioEliminar" value = "<?php echo $fila['id_usuario']; ?>">
<div class="modal fade" id="modalEliminarUsu<?php echo $fila['id_usuario']; ?>" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">        
        <h4 class="modal-title">Eliminar Usuario</h4>
      </div>
      <div class="modal-body">
        <h5>¿Realmente desea eliminar a <?php echo $fila['nombre'].' '.$fila['apellido']; ?>?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
    
  </div>
</div>
</form>