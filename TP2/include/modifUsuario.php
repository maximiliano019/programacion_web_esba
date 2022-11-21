<?php       
    session_start();
    
    $_SESSION['var_log_abm_reg'] = "";

    if (isset($_POST ['txtNombreModif']) && isset($_POST ['txtApellidoModif']) && isset($_POST ['txtDocModif']) &&
        isset($_POST ['txtEmailModif']) && isset($_POST ['txtUsuarioModif']) && isset($_POST ['txtClaveModif']) &&
        $_POST ['txtNombreModif'] != "" && $_POST ['txtApellidoModif'] != "" && $_POST ['txtDocModif'] != "" &&
        $_POST ['txtEmailModif'] != "" && $_POST ['txtUsuarioModif'] != "" && $_POST ['txtClaveModif'] != ""){
        
        $txtIdUsuarioModif = $_POST ['txtIdUsuarioModif'];   
        $txtNombreModif = $_POST ['txtNombreModif'];        
        $txtApellidoModif = $_POST ['txtApellidoModif'];                    
        $txtDocModif = $_POST ['txtDocModif']; 
        $txtEmailModif = $_POST ['txtEmailModif']; 
        $txtUsuarioModif = $_POST ['txtUsuarioModif']; 
        $txtClaveModif = $_POST ['txtClaveModif'];    
        
        $conexion = mysqli_connect('localhost','root','root');

        if (!$conexion){
            $_SESSION['var_log_abm_reg'] = 'No se puede conectar a la base de datos por: '.mysqli_error();          
        }
        else {
            mysqli_select_db($conexion,'tp2');

            $consulta = mysqli_query($conexion, "select * from usuarios where id_usuario = ".$txtIdUsuarioModif."");
            $cant_usu = mysqli_num_rows($consulta);

            if ($cant_usu == 1){

                mysqli_query($conexion, "update usuarios set nombre = '".$txtNombreModif."', apellido = '".$txtApellidoModif."', documento = ".$txtDocModif.", email = '".$txtEmailModif."', usuario = '".$txtUsuarioModif."', clave = '".$txtClaveModif."' where id_usuario = ".$txtIdUsuarioModif."");                        
                $_SESSION['var_log_abm_reg'] = "Usuario modificado";                
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