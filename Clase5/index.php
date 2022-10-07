<?php
    echo "Hola mundo";
    echo "<br>";
    
    //si llamamos un archivo y no esta. Tira un warning y sigue funcionando
    //include("mensaje.php");

    //error fatal si no esta el archivo
    //require("mensaje.php");


    //si llamamos un archivo y no esta. Tira un warning y sigue funcionando
    // se ejecuta una vez y el resto lo busca en memoria
    //include_once("mensaje.php");

    //error fatal si no esta el archivo
    // se ejecuta una vez y el resto lo busca en memoria
    require_once("mensaje.php");

?>