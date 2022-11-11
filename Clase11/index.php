<?php
    
    //conexion al servidor

    $conexion = mysqli_connect('localhost','root','root');

    if (!$conexion){
        dir('No se puede conectar a la base de datos por: '.mysqli_error());
    }
    else {
        echo 'Se ha establecido la conexion al servidor';
    }

    echo '<br>';

    //crear base de datos
/*
    if (mysqli_query($conexion,'create database agenda')){
        echo 'Se ha creado la base de datos correctamente';
    }
    else {
        echo 'No se ha creado la base de datos por: '.mysqli_error();
    }
*/

    //pregunto si la base fue creada
    if (!mysqli_select_db($conexion,'agenda')){
        if (mysqli_query($conexion,'create database agenda')){
            echo 'Se ha creado la base de datos correctamente';
        }
        else {
            echo 'No se ha creado la base de datos por: '.mysqli_error();
        }
    }else {
        echo 'La base de datos ha sido creada con anterioridad';
    }

    //crear tabla
/*
    mysqli_select_db($conexion,'agenda');

    $sql = 'create table mi_agenda (
                personaID int not null auto_increment,
                primary key (personaID),
                nombre varchar (15),
                apellido varchar (15),
                edad int,
                telefono int
            )';

    mysqli_query($conexion, $sql);
*/

    //insert registro
/*    
    mysqli_query($conexion, 'insert into mi_agenda (nombre, apellido, edad, telefono)
                             values ("Victoria", "Bravo", 21, 124578654)');
*/

    echo '<br>';
    echo '<br>';

    //mostrar
    $consulta = mysqli_query($conexion, 'select * from mi_agenda');

    while ($fila = mysqli_fetch_array($consulta)){
        echo $fila['nombre'].' '.$fila['apellido'].' '.$fila['edad'].' '.$fila['telefono'];
        echo '<br>';
    }

    echo '<br>';
    echo '<br>';

    //actualizar
/*
    mysqli_query($conexion, 'update mi_agenda set edad = 28 where nombre = "juan" and apellido = "sanchez"');
*/
  
    //eliminar

/*    
    mysqli_query($conexion, 'delete from mi_agenda where nombre = "pepe" and apellido = "rodriguez"');
*/


?>