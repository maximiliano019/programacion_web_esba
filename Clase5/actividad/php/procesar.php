<?php
    
    $txtNom = $_POST ['txtNom'];
    $txtApe = $_POST ['txtApe'];
    $txtDomi = $_POST ['txtDomi'];
    $rEstu = $_POST ['rEstu'];
    $deportes = "";   

    if (isset($_POST ['chNin']) && $_POST ['chNin'] == "ninguno"){
        $deportes = $_POST ['chNin'];            
    }else{
        if (isset($_POST ['chNin']) == false && isset($_POST ['chTen']) == false && isset($_POST ['chFut']) == false && isset($_POST ['chPes']) == false && isset($_POST ['chNat']) == false){
            $deportes = "No hay deportes seleccionados";            
        }else{
            if (isset($_POST ['chTen']) && $_POST ['chTen'] == "tenis"){
                $deportes = $deportes . " " . $_POST ['chTen'];
            } 
            if (isset($_POST ['chFut']) && $_POST ['chFut'] == "futbol"){
                $deportes = $deportes . " " . $_POST ['chFut'];
            }
            if (isset($_POST ['chPes']) && $_POST ['chPes'] == "pesas"){
                $deportes = $deportes . " " . $_POST ['chPes'];
            }   
            if (isset($_POST ['chNat']) && $_POST ['chNat'] == "natacion"){
                $deportes = $deportes . " " . $_POST ['chNat'];
            }   
        }
    }

    require("../include/resultado.php");

?>