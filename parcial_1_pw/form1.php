<!-- 
        * PARCIAL PROGRAMACION WEB * 

        DOCENTE: LUIS HERETER
        ALUMNOS: AXEL BLANCO - PATRICIO VISCIGLIA
-->

<?php
    session_start();

    $musica = "";

    $_SESSION['nombre'] = $_POST ['nombre'];
    $_SESSION['edad'] = $_POST ['edad'];
    $_SESSION['email'] = $_POST ['email'];
    $_SESSION['combo'] = $_POST ['combo'];
    $_SESSION['radio'] = $_POST ['radio'];
    
    if (isset($_POST ['chk10']) && $_POST ['chk10'] == "Ninguna"){
        $musica = $musica . " · " . $_POST ['chk10'];
                
    } else {
        if (isset($_POST ['chk1']) && $_POST ['chk1'] == "Rock & Roll"){
            $musica = $musica . " · " . $_POST ['chk1'];            
        }
        if (isset($_POST ['chk2']) && $_POST ['chk2'] == "Heavy Metal"){
            $musica = $musica . " · " . $_POST ['chk2'];
        } 
        if (isset($_POST ['chk3']) && $_POST ['chk3'] == "Blues"){
            $musica = $musica . " · " . $_POST ['chk3'];
        }
        if (isset($_POST ['chk4']) && $_POST ['chk4'] == "Jazz"){
            $musica = $musica . " · " . $_POST ['chk4'];
        }   
        if (isset($_POST ['chk5']) && $_POST ['chk5'] == "Pop"){
            $musica = $musica . " · " . $_POST ['chk5'];
        }   
        if (isset($_POST ['chk6']) && $_POST ['chk6'] == "Tango"){
            $musica = $musica . " · " . $_POST ['chk6'];
        }   
        if (isset($_POST ['chk7']) && $_POST ['chk7'] == "Bachata"){
            $musica = $musica . " · " . $_POST ['chk7'];
        }  
        if (isset($_POST ['chk8']) && $_POST ['chk8'] == "Cumbia"){
            $musica = $musica . " · " . $_POST ['chk8'];
        } 
        if (isset($_POST ['chk9']) && $_POST ['chk9'] == "Electrónica"){
            $musica = $musica . " · " . $_POST ['chk9'];
        }  
    }        
        $_SESSION['musica'] = $musica;   
    
    include('form2.php');
?>