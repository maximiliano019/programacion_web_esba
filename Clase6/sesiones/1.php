<?php
    $nombre = $_POST['nombre'];
    echo $nombre;
    echo '</br>';
    echo '<form action="2.php" method="post">
            <label>Ingrese su color favorito: </label>
            <input type="text" name="color"><br>
            <input type="submit" name="">
        </form>';
?>