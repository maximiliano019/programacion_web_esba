<?php       
    session_start();
    
    $_SESSION['var_log_abm_reg'] = "";

    if (isset($_POST ['txtIdUsuarioEliminar'])){
        
        $txtIdUsuarioEliminar = $_POST ['txtIdUsuarioEliminar'];      
        
        $conexion = mysqli_connect('localhost','root','root');

        if (!$conexion){
            $_SESSION['var_log_abm_reg'] = 'No se puede conectar a la base de datos por: '.mysqli_error();          
        }
        else {
            mysqli_select_db($conexion,'tp2');

            $consulta = mysqli_query($conexion, "select * from usuarios where id_usuario = ".$txtIdUsuarioEliminar."");
            $cant_usu = mysqli_num_rows($consulta);

            if ($cant_usu == 1){

                mysqli_query($conexion, "delete from usuarios where id_usuario = ".$txtIdUsuarioEliminar."");                        
                $_SESSION['var_log_abm_reg'] = "Usuario eliminado";                
            }
            else{
                $_SESSION['var_log_abm_reg'] = "Error - no existe el usuario";
            }                        
        }
    }
    else{
        $_SESSION['var_log_abm_reg'] = "Error - Debe completar todos los campos";
    }   

    header("Location: ../abmUsuario.php");    
?>