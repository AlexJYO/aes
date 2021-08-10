<?php

	//Cada acción actualizará la fecha inicial
	session_start();
	$_SESSION['fecha']=date("Y-n-j H:i:s");
	//Con estos dos comandas se actualiza

	//Se manda llamar el constructor de la base de datos
	include_once '../backend/database.php';
	//Se crea un objeto Database
	$db = new Database();
	//Se realiza la conexión a la base de datos
	$conn = mysqli_connect($db->getHost(),$db->getUser(),$db->getPassword(),$db->getDb());

	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL:  ".mysqli_connect_error();
	}

	date_default_timezone_set("America/Mexico_City");
	//If form submitted, insert  values into the database.
	if (isset($_REQUEST['nombre'])) {

		$gmin = stripslashes($_POST['gmin']);
		$gmin = mysqli_real_escape_string($conn,$gmin);

		$nombre = stripslashes($_REQUEST['nombre']);
		$nombre = mysqli_real_escape_string($conn,$nombre);

		$aes_puesto = stripslashes($_REQUEST['aes_puesto']);
		$aes_puesto = mysqli_real_escape_string($conn,$aes_puesto);

		//Insertar elemento
		//Se usan prepare y execute para realizar la insersion de un nuevo elemento
		$query = $db->connect()->prepare("INSERT into leader (gmin, nombre, puesto) VALUES ('$gmin','$nombre','$aes_puesto')");
		$result=$query->execute();
		if (!$result) {
			die('Query failed.');
		}
		echo "Registro Exitoso";
	}
?>