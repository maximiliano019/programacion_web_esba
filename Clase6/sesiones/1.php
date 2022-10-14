<?php
    session_start();

    $nombre = $_POST['nombre'];
    $_SESSION['NOMBRE'] = $nombre;
    
    echo $nombre;
    echo '</br>';
    echo '<form action="2.php" method="post">
            <label>Ingrese su color favorito: </label>
            <input type="text" name="color"><br>
            <input type="submit" name="">
        </form>';
?>