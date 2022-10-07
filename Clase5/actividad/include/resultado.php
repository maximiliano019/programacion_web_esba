<?php    
    echo "Datos del formulario: <br><br>";    
    echo "Nombre: $txtNom <br>";    
    echo "Apellido: $txtApe <br>";    
    echo "Domicilio: $txtDomi <br>";    
    echo "Estudios cursados: $rEstu <br>";
    echo "Tu/s deporte/s favoritos son: $deportes <br>";
 
    if (isset($_POST ['chBole']) && $_POST ['chBole'] == "boletin_si"){
        echo "Boletin: SI <br>";    
    }
    else{
        echo "Boletin: NO <br>";    
    }
?>