<?php

    $db = new SQLite3('agenda.db');
  
/*    
    $db ->exec("create table personas ( id integer primary key autoincrement,
                                        nombre text,
                                        mail text)");
*/

/*
    $db ->exec("insert into personas values (1, 'jose', 'jose@hotmail.com')");
    $db ->exec("insert into personas values (2, 'enresto', 'ernesto@hotmail.com')");
    $db ->exec("insert into personas values (3, 'jorge', 'jorge@hotmail.com')");
    $db ->exec("insert into personas values (4, 'carlos', 'carlos@hotmail.com')");
    $db ->exec("insert into personas values (5, 'maria', 'maria@hotmail.com')");
*/      
    
    $resultado = $db->query('select * from personas');
    //$resultado = $db->exec('select * from personas');

    //while ($fila = $resultado->fetchArray(SQLite3_assoc)){
    while ($fila = $resultado->fetchArray()){
       
        $id = $fila["id"];
        $nombre = $fila["nombre"];

        echo ("$id - $nombre <br/>");

        $mail = $fila["mail"];

        echo ("$id - $mail <br/>");
    }
    
    echo ("<br/>");

?>