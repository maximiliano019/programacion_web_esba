<!-- 
        * PARCIAL PROGRAMACION WEB * 

        DOCENTE: LUIS HERETER
        ALUMNOS: AXEL BLANCO - PATRICIO VISCIGLIA
-->

<?php

    echo '<link href="css/estilos.css" type="text/css" rel="stylesheet">';
    echo "<title>Formulario - iMusic 🎧</title>";

    echo " <body class='fondo_final'> 
                <table border='2px'> 
                <th colspan='2'><h2>Datos Personales</h2></th>       
                    <tr>
                            <td>Nombre Completo</td>
                    <td>". $_SESSION['nombre']."</td>            
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>". $_SESSION['edad']."</td>            
                </tr>
                <tr>
                    <td>Email</td>
                    <td>". $_SESSION['email']."</td>            
                </tr>
                </tr>
                </table><br></br>

                <table border='2px'>
                <th colspan='2'><h2>Preguntas</h2</th> 
                <tr>
                    <td>Preferencia Musical</td>
                    <td>". $_SESSION['musica']."</td>            
                </tr>
                <tr>
                    <td>Instrumento que lo Representa</td>
                    <td>". $_SESSION['combo']."</td>            
                </tr>
                <tr>
                    <td>Es o fue parte de una Banda</td>
                    <td>". $_SESSION['radio']."</td>            
                </tr>
                </table><br></br>
                <a href='index.html'><img src='./img/volver.png' width='2%''></a>
            </body>";
            
    session_destroy();
    
?>