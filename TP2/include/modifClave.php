<?php       
    session_start();
    
    $_SESSION['var_log_cbio'] = "";

    if (isset($_POST ['txtUsuario']) && isset($_POST ['txtClaveNueva']) && isset($_POST ['txtClaveNueRep']) &&
        $_POST ['txtUsuario'] != "" && $_POST ['txtClaveNueva'] != "" && $_POST ['txtClaveNueRep'] != ""){
        $txtUsuario = $_POST ['txtUsuario'];        
        $txtClaveNueva = $_POST ['txtClaveNueva'];                    
        $txtClaveNueRep = $_POST ['txtClaveNueRep'];                            

        $conexion = mysqli_connect('localhost','root','root');

        if (!$conexion){
            $_SESSION['var_log_cbio'] = 'No se puede conectar a la base de datos por: '.mysqli_error();          
        }
        else {
            mysqli_select_db($conexion,'tp2');

            $consulta = mysqli_query($conexion, "select * from usuarios where usuario = '".$txtUsuario."'");
            $cant_usu = mysqli_num_rows($consulta);

            if ($cant_usu == 1){
                if ($txtClaveNueva == $txtClaveNueRep){                    
                    mysqli_query($conexion, "update usuarios set clave = '".$txtClaveNueva."' where usuario = '".$txtUsuario."'");                    
                    $_SESSION['var_log_cbio'] = "Clave actualizada";
                }
                else{
                    $_SESSION['var_log_cbio'] = "Error - Claves nuevas distintas";                        
                }
            }
            else{
                $_SESSION['var_log_cbio'] = "Error - Usuario incorrecto";                
            }                        
        }
    }
    else{
        $_SESSION['var_log_cbio'] = "Error - Debe completar todos los campos";
    }   

    header("Location: ../cambioClave.php");    
?>