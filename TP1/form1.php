<?php
    session_start();

    $tipoMusica = "";

    $_SESSION['nombre'] = $_POST ['nombre'];
    $_SESSION['edad'] = $_POST ['edad'];
    $_SESSION['email'] = $_POST ['email'];
    $_SESSION['combo'] = $_POST ['combo'];
    $_SESSION['radio'] = $_POST ['radio'];
      
    
    if (isset($_POST ['chk5']) && $_POST ['chk5'] == "Ninguna"){
        $tipoMusica = $tipoMusica . " " . $_POST ['chk5'];
                
    } else {
        if (isset($_POST ['chk1']) && $_POST ['chk1'] == "Rock"){
            $tipoMusica = $tipoMusica . " " . $_POST ['chk1'];            
        }
        if (isset($_POST ['chk2']) && $_POST ['chk2'] == "Bachata"){
            $tipoMusica = $tipoMusica . " " . $_POST ['chk2'];
        } 
        if (isset($_POST ['chk3']) && $_POST ['chk3'] == "Tango"){
            $tipoMusica = $tipoMusica . " " . $_POST ['chk3'];
        }
        if (isset($_POST ['chk4']) && $_POST ['chk4'] == "Jazz"){
            $tipoMusica = $tipoMusica . " " . $_POST ['chk4'];
        }   
    }        
    
    $_SESSION['tipoMusica'] = $tipoMusica;   
    
    include('form2.php');
?>