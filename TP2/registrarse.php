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
            <form action="./include/crearUsuario.php" method="POST">
                <img class="mb-4" src="./img/loco_kipling.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Registrate</h1>
                
                <div class="col-12">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre" name="txtNombre">
                </div>
                
                <div class="col-12">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" placeholder="Ingrese su apellido" name="txtApellido">
                </div>
                
                <div class="col-12">
                    <label class="form-label">Documento</label>
                    <input type="number" class="form-control" placeholder="Ingrese su documento" name="txtDoc">
                </div>
                
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Ingrese su email" name="txtEmail">
                </div>
                
                <div class="col-12">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control" placeholder="Ingrese su usuario" name="txtUsuario">
                </div>
                
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Clave</label>
                    <input type="password" class="form-control" placeholder="Ingrese su clave" name="txtClave">
                </div>                        
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Continuar</button>                                        
                    <button type="submit" class="btn btn-primary"><a style="text-decoration: none; color: white;" href='./include/cerrarSecion.php'>Volver</a></button>
                    <?php
                        session_start();

                        if (isset($_SESSION['var_log_reg'])){
                            if ($_SESSION['var_log_reg'] == "Usuario creado"){
                                echo "<p class = 'text-success'>".$_SESSION['var_log_reg']."</p>";
                            }
                            else {
                                echo "<p class = 'text-danger'>".$_SESSION['var_log_reg']."</p>";
                            }                                
                        }                        
                    ?>
                    <p class="mt-5 mb-3 text-muted">&copy; 2022 Kipling - Argentina</p>
                </div>
            </form>
        </main>
    </body>
</html>