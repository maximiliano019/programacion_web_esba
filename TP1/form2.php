<?php    

    echo "  <table border='2px'> 
                <th colspan='4'>Encuesta de Musica</th>       
                <tr>
                    <td>Nombre</td>
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
                <tr>
                    <td>Tipo de Musica</td>
                    <td>". $_SESSION['tipoMusica']."</td>            
                </tr>
                <tr>
                    <td>Instrumento</td>
                    <td>". $_SESSION['combo']."</td>            
                </tr>
                <tr>
                    <td>Banda</td>
                    <td>". $_SESSION['radio']."</td>            
                </tr>
            </table><br>
            <a href='index.html'><img src='./img/flechas.png' width='5%''></a>";

    session_destroy();
?>