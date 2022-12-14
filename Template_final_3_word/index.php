<?php    
    //conexion al servidor
    $conexion = mysqli_connect('localhost','root','root');

    if (!$conexion){
        dir('No se puede conectar a la base de datos por: '.mysqli_error());
    }
    else {
        echo 'Se ha establecido la conexion al servidor';

        echo '<br>';

        //crear base de datos
        if (!mysqli_select_db($conexion,'libreria')){
            if (mysqli_query($conexion,'create database libreria')){
                echo 'Se ha creado la base de datos correctamente';
            }
            else {
                echo 'No se ha creado la base de datos por: '.mysqli_error();
            }
        } 
        else {
            echo 'La base de datos ha sido creada con anterioridad';
        }    
        
        echo '<br>';

        //crear tabla
        mysqli_select_db($conexion,'libreria');

        $sql = 'create table IF NOT EXISTS libros (
                    id int not null auto_increment,
                    primary key (id),
                    titulo varchar (60),
                    autor varchar (60),
                    isbn varchar (20),
                    descripcion varchar (60)
                )';
                
        mysqli_query($conexion, $sql);

        //insert registro
        mysqli_query($conexion, 'insert into libros (titulo, autor, isbn, descripcion)
                                values ("fierro", "alejandro", "2145785621", "libro")');

        echo '<br>';

        //mostrar
        $consulta = mysqli_query($conexion, 'select * from libros');

        echo '<h4>Resultado de la tabla:</h4>';

        while ($fila = mysqli_fetch_array($consulta)){
            echo $fila['id'].' '.$fila['titulo'].' '.$fila['autor'].' '.$fila['isbn'].' '.$fila['descripcion'];
            echo '<br>';
        }
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