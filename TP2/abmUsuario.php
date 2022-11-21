<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Kipling</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo.ico">    
    <link href="./css/estilos.css" rel="stylesheet">
  </head>  
  <body>
    <main class="container">
        <?php
            session_start();    

            echo "<h6>Bienvenido: ".$_SESSION['txtUsuario']."</h6>";          
        ?>
        <img class="mb-4" src="./img/loco_kipling.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Administrador de Usuarios</h1>
        
        <caption>
            <button class = "btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsu"><a style="text-decoration: none; color: white;" href='./abmRegistrarse.php'>Agregar</a>
                <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
                </span>
            </button>
        </caption>
        <table class = "table table-striped table-hover">            
            <thead>
                <tr>
                    <th scope = "col">ID</th>
                    <th scope = "col">NOMBRE</th>
                    <th scope = "col">APELLIDO</th>
                    <th scope = "col">DOCUMENTO</th>
                    <th scope = "col">EMAIL</th>
                    <th scope = "col">USUARIO</th>
                    <th scope = "col">CLAVE</th>
                    <th scope = "col">EDITAR</th>
                    <th scope = "col">ELIMINAR</th>
                </tr>                
            </thead>
            <tbody>
                <?php
                    $_SESSION['var_log_abm'] = "";
          
                    $conexion = mysqli_connect('localhost','root','root');

                    if (!$conexion){
                        $_SESSION['var_log_abm'] = 'No se puede conectar a la base de datos por: '.mysqli_error();          
                    }
                    else {
                        mysqli_select_db($conexion,'tp2');

                        $consulta = mysqli_query($conexion, 'select * from usuarios');

                        while ($fila = mysqli_fetch_array($consulta)){                                       
                ?>
                <tr>
                    <th scope = "row"><?php echo $fila['id_usuario']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['apellido']; ?></td>
                    <td><?php echo $fila['documento']; ?></td>
                    <td><?php echo $fila['email']; ?></td>
                    <td><?php echo $fila['usuario']; ?></td>
                    <td><?php echo $fila['clave']; ?></td>
                    <td>
                        <button class = "btn btn-warning" data-toggle="modal" data-target="#modalModificarUsu<?php echo $fila['id_usuario']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                    </td>
                    <td>
                        <button class = "btn btn-danger" data-toggle="modal" data-target="#modalEliminarUsu<?php echo $fila['id_usuario']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                <?php include ('./include/abmModal.php'); }}?>
            </tbody>
          </table>
          <button type="submit" class="btn btn-primary"><a style="text-decoration: none; color: white;" href='./include/cerrarSecion.php'>Volver</a></button>
          
          <?php
                echo "<br><br>";
                if (isset($_SESSION['var_log_abm_reg'])){
                    if ($_SESSION['var_log_abm_reg'] == "Usuario modificado" || $_SESSION['var_log_abm_reg'] == "Usuario eliminado" || $_SESSION['var_log_abm_reg'] == "Usuario creado"){
                        echo "<p class = 'text-success'>".$_SESSION['var_log_abm_reg']."</p>";
                    }
                    else {
                        echo "<p class = 'text-danger'>".$_SESSION['var_log_abm_reg']."</p>";
                    }                                
                }                        
            ?> 
    </main>    
  </body>
</html>