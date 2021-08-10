<?php
	$banReg = 0;
	include_once 'database.php';
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

	if (isset($_REQUEST['user']) && strcmp($_REQUEST['pass1'],$_REQUEST['pass2']) == 0) {

		//removes backslashes
		$user = stripslashes($_REQUEST['user']);
		//escapes special characters in a string
		$user = mysqli_real_escape_string($conn,$user);
		//$id = stripslashes($_REQUEST['id']);
		//$id = mysqli_real_escape_string($conn,$id);
		$name = stripslashes($_REQUEST['name']);
		$name = mysqli_real_escape_string($conn,$name);
		$last = stripslashes($_REQUEST['last']);
		$last = mysqli_real_escape_string($conn,$last);
		$boss = stripslashes($_REQUEST['boss']);
		$boss = mysqli_real_escape_string($conn,$boss);
		$department = stripslashes($_REQUEST['department']);
		$department = mysqli_real_escape_string($conn,$department);
		$crew = stripslashes($_REQUEST['crew']);
		$crew = mysqli_real_escape_string($conn,$crew);
		$pass = stripslashes($_REQUEST['pass1']);
		$pass = mysqli_real_escape_string($conn,$pass);
		$type = 2;


		//Insertar elemento
		//Se usan prepare y execute para realizar la insersion de un nuevo elemento
		$query = $db->connect()->prepare("INSERT into user (usuario, contraseña, nombre, apellido, jefe, departamento, tripulacion, tipo) VALUES ('$user','".md5($pass)."', '$name', '$last', '$boss', '$department', '$crew', '$type')");
		$result=$query->execute();
		if ($result) {
			$banReg=1;
		}

	}

	echo $banReg;
?>