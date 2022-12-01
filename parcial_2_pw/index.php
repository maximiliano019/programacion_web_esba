<?php

$servidor ="localhost";
$usuario="root";
$clave="root";
$bbd="formulario";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bbd);

// Este if es para que muestre un mensaje de error en caso que falle la conexion con base de datos y saber que el problema esta aca.
if(!$conexion){
    echo"Error en la conexion con el servidor";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Parcial 2 PW - Formulario de Registro</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
		
	<div class="contenedor">
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
			<h2>Formulario de Registro</h2>
			</br></br>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<input type="text" name="apellido" placeholder="Apellido" required>
				<input type="text" name="edad" placeholder="Edad" required>
				<input type="email" name="correo" placeholder="Correo Electrónico" required>
				</br>
				<div class="sexo">
					<input type="radio" name="sexo" id="Masculino" value="Masculino" required checked>
					<label class="label-radio Masculino" for="Masculino">Hombre</label>

					<input type="radio" name="sexo" id="Femenino" value="Femenino">
					<label class="label-radio Femenino" for="Femenino">Mujer</label>
				</div>
				</br>
				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos" required>
					<label for="terminos">Acepto generar mi registro.</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>
			</br>
			<!-- Este es el boton para registrar -->
			<input type="submit" class="btn" name="registrarse" value="Registrarme">
		</form>

		<!-- Este es el codigo de como se forma la grilla -->
		<div class="tabla">
			<table>
				<h2>Personas Registradas</h2>
				</br>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Edad</th>
					<th>Correo Electrónico</th>
					<th>Sexo</th>
				</tr>
				
				<?php
					$consulta = "SELECT * FROM datos";
					$ejecutar_consulta = mysqli_query($conexion, $consulta);
					$ver_filas = mysqli_num_rows($ejecutar_consulta);
					$filas = mysqli_fetch_array($ejecutar_consulta);

					// Este codigo es paramostrar un mensaje de error si falla la consulta.. Si esta todo bien muestra los datos en la grilla.
					if(!$ejecutar_consulta){
						echo"Error en la consulta";
						}else{
							if($ver_filas < 1){
								echo"<tr><td>Sin registros...</td></tr><"; //Esto lo puse para que no quede la grilla vacia , una vez que insertas datos desaparece.
							}else{
								for($i=0; $i<=$filas; $i++){
									echo'
										<tr>
										<td>'.$filas[5].'</td>
										<td>'.$filas[0].'</td>
										<td>'.$filas[1].'</td>
										<td>'.$filas[2].'</td>
										<td>'.$filas[3].'</td>
										<td>'.$filas[4].'</td>
										</tr>
										';
										$filas = mysqli_fetch_array($ejecutar_consulta);
							
								}
							}	
						}
				?>

			</table>
		</div>
	</div>
</body>
</html>


<?php
	if(isset($_POST['registrarse' ])){
    	$nombre =  $_POST["nombre"];
    	$apellido = $_POST["apellido"];
		$edad = $_POST["edad"];
    	$correo =  $_POST["correo"];
    	$sexo =  $_POST["sexo"];
    	

    	$insertar_datos = "INSERT INTO datos (nombre, apellido, edad, correo, sexo) VALUES ('$nombre', '$apellido', $edad, '$correo', '$sexo')";

    	$ejecutar_insertar = mysqli_query($conexion, $insertar_datos);

		// Este if es para mostrar un error en caso que se haga mal la insercion de datos y saber donde esta el error.
    	if(!$ejecutar_insertar){
        	echo"Error en la linea de SQL";
		}

		// Este codigo es para que cuando apretas el boton registrar , se actualice la  pagina sola y ya muestre el registro en la grilla.
		header("location:index.php");
	}
?>