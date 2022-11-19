<?php    
    session_destroy();
    session_start();
    
    $_SESSION['var_log_ini'] = "";

    if (isset($_POST ['txtUsuario']) && isset($_POST ['txtClave']) && $_POST ['txtUsuario'] != "" && $_POST ['txtClave'] != ""){
        $txtUsuario = $_POST ['txtUsuario'];
        $_SESSION['txtUsuario'] = $txtUsuario; 

        $txtClave = $_POST ['txtClave'];                    

        $conexion = mysqli_connect('localhost','root','root');

        if (!$conexion){
            $_SESSION['var_log_ini'] = 'No se puede conectar a la base de datos por: '.mysqli_error();
        }
        else {
            mysqli_select_db($conexion,'tp2');

            $consulta = mysqli_query($conexion, "select * from usuarios where usuario = '".$txtUsuario."' and clave = '".$txtClave."'");
            $cant_usu = mysqli_num_rows($consulta);

            if ($cant_usu == 1){                                
                header("Location: ../abmUsuario.php");
            }
            else{
                $_SESSION['var_log_ini'] = "Usuario o Clave incorrecta";
                header("Location: ../index.php");                
            }            
        }
    }
    else{
        $_SESSION['var_log_ini'] = "Error - Debe completar ambos campos"; 
        header("Location: ../index.php");
    }
    
?>