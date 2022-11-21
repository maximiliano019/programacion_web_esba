<?php
    session_start();

    $nombre = $_POST['nombre'];
    $_SESSION['nombre'] = $nombre;    

    echo '  <form action="menu.php" method="post">
                <label>Ingrese su apellido: </label>
                <input type="text" name="apellido" required><br><br>
                <input type="submit" name="">
            </form>';
?>