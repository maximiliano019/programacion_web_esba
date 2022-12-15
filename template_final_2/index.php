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

            <!-- AGREGO UN SALTO DE LINEA -->
            <br><br>

            <legend>Elija una opcion de pago:</legend>
            <input type="radio" id="radio-1" name="radio" value="Efectivo" checked>
            <label for="radio-1">pago con efectivo</label>
            <input type="radio" id="radio-2" name="radio" value="Tarjeta">
            <label for="radio-2">pago con tarjeta</label>

            <!-- AGREGO UN SALTO DE LINEA -->
            <br><br>

            <legend>Elija un deporte:</legend>
            <input type="checkbox" id="chk1" name="check1" value = "Tenis" checked>
            <label for="chk1">Tenis</label>
            <input type="checkbox" id="chk2" name="check2" value = "Natación">
            <label for="chk2">Natación</label>
            
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
    
    if (isset($_POST ['txtNombre']) && isset($_POST ['radio'])) {

        //GUARDO LOS DATOS DEL CAMPO EN LA VARIABLE
        $vNombre = $_POST ['txtNombre'];    
        $radio = $_POST ['radio'];
        $check = ""; 

        if (isset($_POST ['check1'])) {
            $check = $check . " " .$_POST ['check1'];
        }
        if (isset($_POST ['check2'])) {
            $check = $check . " " .$_POST ['check2'];
        }
        

        // CREA LA BASE DE DATOS
        $db = new SQLite3('final.db');

        // CREA LA TABLA EN LA BASE DE DATOS
        $db ->exec("create table if not exists tabla_final (id integer primary key autoincrement, 
                                                            nombre text,
                                                            medio_pago text,
                                                            deporte text)");
        
        // INSERTO DATOS EN LA TABLA
        $db ->exec("insert into tabla_final (nombre, medio_pago, deporte) values ('$vNombre','$radio', '$check')");
                
        // MUESTRO LOS DATOS DE LA TABLA
        $resultado = $db->query('select * from tabla_final');
?>
        <table border = '2px' style = "text-align: center; width: 500px;" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>                   
                    <th>MEDIO DE PAGO</th>  
                    <th>DEPORTE</th>  
                </tr>                
            </thead>
            <tbody>

<?php
        // RECORRO LOS DATOS DE LA TABLA Y MUESTRO EN PANTALLA
        while ($fila = $resultado->fetchArray()){                    
?>
                <tr>
                    <th scope = "row"><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>            
                    <td><?php echo $fila['medio_pago']; ?></td> 
                    <td><?php echo $fila['deporte']; ?></td> 
                </tr>
<?php       
        }
?>
            </tbody>
        </table>
<?php
    }
?>