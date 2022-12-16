<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Final</title>
    </head>
    <body>
        <form method="POST">
            <input type="checkbox" id="chk" name="check" value = "Boletin OK">
            <label for="chk">Quiero suscribirme al boletin de noticias</label>        
            <br><br>
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>
    </body>
</html>

<?php              
    if (isset($_POST ['check']) && $_POST ['check'] == "Boletin OK") 
    {
        mail("usuario@yahoo.com", "Asunto", "Mensaje", "From: suscripciones@hotmail.com");        
        
        echo 'Mail enviado';
    }
    else 
    {
        echo 'Debe tildar para suscribirse al boletin';
    }
?>