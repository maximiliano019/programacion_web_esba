<?php    
    $db = new SQLite3('libreria.db');
    
    $db ->exec("create table if not exists libros (id integer primary key autoincrement, titulo text, autor text, isbn text, descripcion text)");

    $db ->exec("insert into libros (titulo, autor, isbn, descripcion) values ('martin fierro', 'alejandro', '2145785621', 'libro aburrido')");

    $resultado = $db->query('select * from libros');

    while ($fila = $resultado->fetchArray()){        
        $id = $fila["id"];
        $titulo = $fila["titulo"];
        $autor = $fila["autor"];
        $isbn = $fila["isbn"];
        $descripcion = $fila["descripcion"];
        echo ("$id - $titulo - $autor - $isbn - $descripcion <br/>");    
    }
?>

<?php   
    echo '<br><br>
            <form method="POST">
                <input type="checkbox" id="chk" name="chk" checked requeride>
                <label for="chk">Quiero suscribirme al boletin de noticias</label>        
                <input type="submit" name="btnEnviar" value="Enviar">
            </form>';

    if (isset($_POST ['submit'])) { 
        mail("usuario@yahoo.com", "Asunto", "Mensaje", "From: suscripciones@hotmail.com");        
    }
?>