<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Kipling</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="./img/logo.ico">    
        <link href="./css/estilos.css" rel="stylesheet">
    </head>
    <body class="text-center">    
        <main class="form-signin w-100 m-auto">
            <form action="./include/validarInicio.php" method="POST">
                <img class="mb-4" src="./img/loco_kipling.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Inicio</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Usuario" name="txtUsuario">
                    <label for="floatingInput">Usuario</label>
                </div>
            
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="txtClave">
                    <label for="floatingPassword">Clave</label>
                    <a href="./cambioClave.php">¿Ha olvidado su contraseña?</a>
                    <a href="./registrarse.php">Registrarse</a>
                </div>               

                <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>

                <?php
                    session_start();

                    if (isset($_SESSION['var_log_ini'])){
                        echo "<p class = 'text-danger'>".$_SESSION['var_log_ini']."</p>";
                    }                                                 
                ?>

                <p class="mt-5 mb-3 text-muted">&copy; 2022 Kipling - Argentina</p>
            </form>
        </main>    
    </body>
</html>
