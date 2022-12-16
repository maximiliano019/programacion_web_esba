<?php    
    $conexion = mysqli_connect('localhost','root','root');

    if (!$conexion){
        dir('No se puede conectar a la base de datos por: '.mysqli_error());
    }
    else {
        echo 'Se ha establecido la conexion al servidor';

        echo '<br>';

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

        mysqli_select_db($conexion,'libreria');

        $sql = 'create table IF NOT EXISTS libros (
                    id int not null auto_increment,
                    titulo varchar (60),
                    autor varchar (60),
                    isbn varchar (20),
                    descripcion varchar (60)
                )';
                
        mysqli_query($conexion, $sql);

        mysqli_query($conexion, 'insert into libros (titulo, autor, isbn, descripcion)
                                values ("titulo1", "autor1", "isbn1", "descripcion1")');                                                           

        $consulta = mysqli_query($conexion, 'select * from libros');

        echo '<h4>Resultado de la tabla:</h4>';
?>
        <table border = '2px' style = "text-align: center; width: 500px;" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITULO</th>                   
                    <th>AUTOR</th>  
                    <th>ISBN</th>  
                    <th>DESRCIPCION</th>  
                </tr>                
            </thead>
            <tbody>
    
<?php
        while ($fila = mysqli_fetch_array($consulta)){
?>
                <tr>
                    <th scope = "row"><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['titulo']; ?></td>            
                    <td><?php echo $fila['autor']; ?></td> 
                    <td><?php echo $fila['isbn']; ?></td> 
                    <td><?php echo $fila['descripcion']; ?></td> 
                </tr>
<?php       
        }
?>
            </tbody>
        </table>
<?php
    }    
?>
