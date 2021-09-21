<?php
	
	//Inicio de sesion
	session_start();

	//Validar si hay sesion iniciada. 
	if (isset($_SESSION['rol'])) {
		//Si hay una sesion se destruye
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include('meta.php');?>
	<link rel="stylesheet" type="text/css" href="../style/styleAesReg.css">
	<link rel="icon"  href="../img/GM_logo.jpg" type="image/jpg">
	<title>Registro</title>
</head>
<body>

	<div class="container">
		<div id="aesReg">
			<h2> Registro</h2>
			
			<form id="aesReg-form">
				<div class="form-group">
					<input type="number" step="1" id="aesUser" placeholder="GMIN" class="form-control" required>							
				</div>	
				<div class="form-group">
					<input type="text" id="nombre" placeholder="Nombre" class="form-control" required>							
				</div>	
				<div class="form-group">
					<input type="text" id="apellido" placeholder="Apellido" class="form-control" required>							
				</div>
				<div class="form-group">
					<input type="text" id="jefe" placeholder="Lider directo" class="form-control" required>							
				</div>
				<!-- <div class="form-group">
					<input type="text" id="departamento" placeholder="Departamento" class="form-control" required>							
				</div> -->

				<div class="input-group">
				  <label class="input-group-text" for="departamento">Departamento</label>
				  <select class="form-select" id="departamento">
				    <option selected>Elige...</option>
				    <option value="1">Produccion</option>
				    <option value="2">Dados</option>
				    <option value="3">Prensas/Controles</option>
				  </select>
				</div>

				<!-- <div class="form-group">
					<input type="text" id="tripulacion" placeholder="Tripulacion" class="form-control" >							
				</div> -->	
				<div class="input-group">
				  <label class="input-group-text" for="tripulacion">Tripulacion</label>
				  <select class="form-select" id="tripulacion">
				    <option selected>Elige...</option>
				    <option value="1">A</option>
				    <option value="2">B</option>
				    <option value="3">C</option>
				    <option value="3">D</option>
				    <option value="3">E</option>
				  </select>
				</div>		
				<div class="form-group input-group">
					<input type="password" id="aesPass1" placeholder="Contraseña" class="form-control" required>	
					<button id="show_pass1" class="btn btn-primary" type="button"> <span class="fa fa-eye-slash iconN"></span> </button>				
				</div>
				<div class="form-group input-group mb-4">
					<input type="password" id="aesPass2" placeholder="Confirmar contraseña" class="form-control" required>	
					<button id="show_pass2" class="btn btn-primary" type="button"> <span class="fa fa-eye-slash iconNC"></span> </button>
				</div>
		
				<button type="submit" class="btn btn-success">
					Guardar
				</button>
				<a class="btn btn-primary" href="../index.php" role="button">Cancelar</a>
			</form>
		</div>
	</div>

	<?php include('libs.php');?>
	<script type="text/javascript" src="../js/jsAesReg.js"></script>

</body>
</html>