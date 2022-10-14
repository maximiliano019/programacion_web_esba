<?php
    session_start();

    $color = $_POST['color'];

    echo $_SESSION['NOMBRE'];
    echo '</br>';

    echo $color;
    echo '</br>';

    session_destroy();
?>