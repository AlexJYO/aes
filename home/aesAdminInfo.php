<?php

	//Inicio de sesion
	session_start();
	
	//Validar si el usuario es Administrador
	if (!isset($_SESSION['rol'])) {
		//Si no hay rol esntonces mandar a logear
		header('location: ../index.php');
	}else {
		//Si el rol no es el adecuando entonces cerrar sesion y mandar a logear
		if ($_SESSION['rol'] != 1) {
			header('location: ../backend/aesCerrarSe.php');
		}else {
			//Si se trata de un administrador validar que este activo por lo menos 10 minutos de lo contrario cerrar sesion
			$fechaIni=$_SESSION['fecha'];
			$fechaAct = date("Y-n-j H:i:s");

			if ((strtotime($fechaAct)-strtotime($fechaIni)) > $_SESSION['timeOff']) {
				header('location: ../backend/aesCerrarSe.php');
			}
			else
			{
				$_SESSION['fecha']=$fechaAct;
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include('meta.php');?>
	<link rel="stylesheet" type="text/css" href="../style/styleAesAdm.css">
	<link rel="icon"  href="../img/GM_logo.jpg" type="image/jpg">
	<title>Home</title>
</head>
<body>

	<div class="wrapper">
        <!-- Sidebar  -->

        <?php include('sideBarAdm.php')?>

        <!-- Page Content  -->
        <div id="content">

            <!-- headerTop-->
            <?php include('headerTop.php');?>

            <h2>Información</h2>
            
        </div>
    </div>

	<?php include('libs.php');?>
	<script type="text/javascript" src="../js/jsAesAdmInf.js"></script>


</body>
</html>