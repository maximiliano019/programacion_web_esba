<?php
    setcookie('nombreCookie','Algo...',time()+4800);

    if (isset($_COOKIE['nombreCookie'])){
        echo 'El valor o contenido de la cookie es: ' .$_COOKIE['nombreCookie'];        
    }else{
        echo 'No hay cookies con ese valor';
    }



    echo "<br><br><br><a href='../menuVolver.php'><img src='../img/btn_atras.png' width='5%'></a>";
?>