<?php
    
    $numero = $_POST ['idTabla'];

    echo "Tabla del ".$numero.":</br></br>";
    for ($multiplicador = 0;$multiplicador <= 10; $multiplicador++){
        echo $numero." X ".$multiplicador." = ".$numero * $multiplicador."</br>";
    }

?>