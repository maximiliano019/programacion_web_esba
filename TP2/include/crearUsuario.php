<?php       
    session_start();
    
    $_SESSION['var_log_reg'] = "";

    if (isset($_POST ['txtNombre']) && isset($_POST ['txtApellido']) && isset($_POST ['txtDoc']) &&
        isset($_POST ['txtEmail']) && isset($_POST ['txtUsuario']) && isset($_POST ['txtClave']) &&
        $_POST ['txtNombre'] != "" && $_POST ['txtApellido'] != "" && $_POST ['txtDoc'] != "" &&
        $_POST ['txtEmail'] != "" && $_POST ['txtUsuario'] != "" && $_POST ['txtClave'] != ""){
        
        $txtNombre = $_POST ['txtNombre'];        
        $txtApellido = $_POST ['txtApellido'];                    
        $txtDoc = $_POST ['txtDoc']; 
        $txtEmail = $_POST ['txtEmail']; 
        $txtUsuario = $_POST ['txtUsuario']; 
        $txtClave = $_POST ['txtClave'];    
        
        $conexion = mysqli_connect('localhost','root','root');

        if (!$conexion){
            $_SESSION['var_log_reg'] = 'No se puede conectar a la base de datos por: '.mysqli_error();          
        }
        else {
            mysqli_select_db($conexion,'tp2');

            $consulta = mysqli_query($conexion, "select * from usuarios where usuario = '".$txtUsuario."'");
            $cant_usu = mysqli_num_rows($consulta);

            if ($cant_usu == 0){

                $consulta = mysqli_query($conexion, "select * from usuarios where documento = ".$txtDoc."");
                $cant_usu = mysqli_num_rows($consulta);

                if ($cant_usu == 0){                
                    mysqli_query($conexion, "insert into usuarios (nombre, apellido, documento, email, usuario, clave) values ('".$txtNombre."','".$txtApellido."',".$txtDoc.",'".$txtEmail."','".$txtUsuario."','".$txtClave."')");                    
                    $_SESSION['var_log_reg'] = "Usuario creado";
                }
                else{
                    $_SESSION['var_log_reg'] = "Error - Documento existente";
                } 
            }
            else{
                $_SESSION['var_log_reg'] = "Error - Usuario existente";
            }                        
        }
    }
    else{
        $_SESSION['var_log_reg'] = "Error - Debe completar todos los campos";
    }   

    header("Location: ../registrarse.php");    
?>