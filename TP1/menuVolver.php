<?php    
    session_start();

    echo "<h2 style='text-align: right;'>Bienvenido: ".$_SESSION['nombre']." ".$_SESSION['apellido']."</h2>";
    
    echo "  <title>Ejercicios</title>
            <h1>Programación Web:</h1><br>
            <h2>Menu de clases:</h2>
            <nav>
                <ul>
                    <li><a href='../Clase2/index.html'>Clase 2 (Sumo 2 números)</a></li><br>
                    <li><a href='../Clase3/index.php'>Clase 3 (Ejemplos IF, WHILE, DO WHILE, FOR, FOR EACH y GO TO)</a></li><br>
                    <li><a href='../Clase3/ejer1/index.html'>Clase 3 - Ejercicio 1 - Calculadora</a></li><br>
                    <li><a href='../Clase3/ejer2/index.html'>Clase 3 - Ejercicio 2 - Tablas de multiplicacion del 1 al 9</a></li><br>
                    <li><a href='../Clase3Bis/practica1/index.html'>Clase 3 Bis - Practica 1 - Etiquetas H1 a H6, P, enlaces, imagenes y listas</a></li><br>
                    <li><a href='../Clase3Bis/actividad/index.html'>Clase 3 Bis - Actividad - Tablas</a></li><br>
                    <li><a href='../Clase4/index.html'>Clase 4 - Formularios - opciones del elemento INPUT</a></li><br>
                    <li><a href='../Clase4/actividad/index.html'>Clase 4 - Actividad - Formulario</a></li><br>
                    <li><a href='../Clase5/index.php'>Clase 5 - Sentencias INCLUDE, REQUIRE, INCLUDE_ONCE y REQUIRE_ONCE</a></li><br>
                    <li><a href='../Clase5/actividad/index.html'>Clase 5 - Actividad - Formulario utilizando INCLUDE, REQUIRE, INCLUDE_ONCE o REQUIRE_ONCE</a></li><br>
                    <li><a href='../Clase6/index.php'>Clase 6 - Cookie</a></li><br>
                    <li><a href='../Clase6/sesiones/index.html'>Clase 6 - Sesiones</a></li><br>
                </ul>
            </nav>
            <a href='index.html'><img src='../img/btn_atras.png' width='5%''></a>";
    
?>