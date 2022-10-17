<?php

if (3 > 2) {
    echo "Tres es mayor que dos";
} else {
    echo "Tres no es mayor que dos";
}

echo "</br>";

$mivariable = "Rojo";

if ($mivariable == "Rojo"){
    echo "El color es rojo";
}else {
    echo "no es rojo";
}

echo "</br>";

//while

$variable = 0;

while ($variable <= 10){
    echo $variable. "veces pase por aca...</br>";
    $variable = $variable + 1;
}

echo "</br>";

//do while

$variable2 = 1;

do{
    echo "hola";
}
while ($variable2 > 2);

echo ", ya ha finalizado! </br>";

//for
$numero = 4;

for ($multiplicador = 0;$multiplicador <= 10; $multiplicador++){
    echo $numero."X".$multiplicador."=".$numero * $multiplicador."</br>";
}

//for each

$objetos = array("auto","casa","moto");

foreach($objetos as $valor){
    echo $valor."</br>";
}

echo "</br>";

//go to

goto marca;

echo "Texto que no se ve";

marca:

echo "Este texto si se ve";


echo "<br><br><br><a href='../menuVolver.php'><img src='../img/btn_atras.png' width='5%'></a>";
?>