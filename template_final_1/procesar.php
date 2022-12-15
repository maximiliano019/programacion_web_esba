<?php
    
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

    // AGREGO TITULO
    echo "<h3>RESULTADO DE LA CONSULTA:</h3>";

    // RECORRO LOS DATOS DE LA TABLA Y MUESTRO EN PANTALLA
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
    // MUESTRA BOTON VOLVER
    echo "  <br/>
            <button type='submit'><a href='index.html'>VOLVER A HOME</a></button>";

?>