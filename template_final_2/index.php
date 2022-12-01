<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Templete Final 2</title>
    </head>
    <body>
        
        <!-- AGREGO FORMULARIO -->
        <form method="POST">        
            
            <!-- AGREGO UN CAMPO DE TEXTO -->
            <label>Ingrese su nombre:</label>
            <input type="text" name="txtNombre" required>
            
            <!-- AGREGO DOS SALTOS DE LINEA -->
            <br><br>  
            
            <!-- AGREGO UN BOTON -->
            <input type="submit">
        </form>

        <!-- AGREGO UN SALTO DE LINEA -->
        <br>

        <!-- AGREGO TITULO -->
        <h3>RESULTADO DE LA CONSULTA:</h3>
        
    </body>
</html>

<?php
    
    if (isset($_POST ['txtNombre'])) {

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

        // RECORRO LOS DATOS DE LA TABLA Y MUESTRO EN PANTALLA
        while ($fila = $resultado->fetchArray()){
            
            $vId = $fila["id"];
            $vNombreWhile = $fila["nombre"];

            echo ("$vId - $vNombreWhile <br/>");
        
        }
    }

?>