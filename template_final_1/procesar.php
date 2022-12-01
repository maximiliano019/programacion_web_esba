<?php
    
    //GUARDO LOS DATOS DEL CAMPO EN LA VARIABLE
    $vNombre = $_POST ['txtNombre'];

    // CREA LA BASE DE DATOS
    $db = new SQLite3('final.db');

    // CREA LA TABLA EN LA BASE DE DATOS
    $db ->exec("create table if not exists tabla_final (id integer primary key autoincrement, 
                                                        nombre text)");
    
    // INSERTO DATOS EN LA TABLA
    $db ->exec("insert into tabla_final (nombre) values ('$vNombre')");
            
    // MUESTRO LOS DATOS DE LA TABLA
    $resultado = $db->query('select * from tabla_final');

    // AGREGO TITULO
    echo "<h3>RESULTADO DE LA CONSULTA:</h3>";

    // RECORRO LOS DATOS DE LA TABLA Y MUESTRO EN PANTALLA
    while ($fila = $resultado->fetchArray()){
        
        $vId = $fila["id"];
        $vNombreWhile = $fila["nombre"];

        echo ("$vId - $vNombreWhile <br/>");
    
    }

    // MUESTRA BOTON VOLVER
    echo "  <br/>
            <button type='submit'><a href='index.html'>VOLVER A HOME</a></button>";

?>