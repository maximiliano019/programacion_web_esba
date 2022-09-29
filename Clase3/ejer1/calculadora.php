<?php
    
    $num1 = $_POST ['varNum1'];
    $num2 = $_POST ['varNum2'];
    $idCalcu = $_POST ['idCalcu'];

/*
    if ($idCalcu == "suma"){
        $resultado = $num1 + $num2;
        echo "La suma de $num1 y $num2 es $resultado";
    }else if ($idCalcu == "resta"){
        $resultado = $num1 - $num2;
        echo "La resta de $num1 y $num2 es $resultado";
    }else if ($idCalcu == "multi"){
        $resultado = $num1 * $num2;
        echo "La multiplicacion de $num1 y $num2 es $resultado";
    }else{
        $resultado = $num1 / $num2;
        echo "La division de $num1 y $num2 es $resultado";
    } 
*/          

    switch ($idCalcu) {
    case "suma":
        $resultado = $num1 + $num2;
        echo "La suma de $num1 y $num2 es $resultado";
        break;
    case "resta":
        $resultado = $num1 - $num2;
        echo "La resta de $num1 y $num2 es $resultado";
        break;
    case "multi":
        $resultado = $num1 * $num2;
        echo "La multiplicacion de $num1 y $num2 es $resultado";
        break;
    default:
        $resultado = $num1 / $num2;
        echo "La division de $num1 y $num2 es $resultado";
    }

?>