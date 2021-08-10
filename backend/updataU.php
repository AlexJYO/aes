<?php
	
	//Cada acción actualizará la fecha inicial
	session_start();
	$_SESSION['fecha']=date("Y-n-j H:i:s");
	//Con estos dos comandas se actualiza

	$id = $_SESSION['id'];
	
	include('database.php');
	$db = new Database();
	//Se realiza la conexión a la base de datos
	$conn = mysqli_connect($db->getHost(),$db->getUser(),$db->getPassword(),$db->getDb());

	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL:  ".mysqli_connect_error();
	}
	if (isset($id)) {

		$user= stripslashes($_REQUEST['user']);
		$user= mysqli_real_escape_string($conn,$user);
		$nombre= stripslashes($_REQUEST['nombre']);
		$nombre= mysqli_real_escape_string($conn,$nombre);
		$apellido= stripslashes($_REQUEST['apellido']);
		$apellido= mysqli_real_escape_string($conn,$apellido);
		$jefe= stripslashes($_REQUEST['jefe']);
		$jefe= mysqli_real_escape_string($conn,$jefe);
		$departamento= stripslashes($_REQUEST['departamento']);
		$departamento= mysqli_real_escape_string($conn,$departamento);
		$tripulacion= stripslashes($_REQUEST['tripulacion']);
		$tripulacion= mysqli_real_escape_string($conn,$tripulacion);
		$pass = stripslashes($_REQUEST['passN']);
		$pass = mysqli_real_escape_string($conn,$pass);
		$pass = md5($pass);

		if (!isset($_REQUEST['passN']) || $_REQUEST['passN']=='') {
			$query = $db->connect()->prepare("UPDATE user SET usuario = '$user', nombre = '$nombre', apellido = '$apellido', jefe = '$jefe', departamento = '$departamento', tripulacion = '$tripulacion' WHERE id = '$id'");
			$result=$query->execute();
			if (!$result) {
				die('Query Failed.');
			}
		}else{
			$query = $db->connect()->prepare("UPDATE user SET usuario = '$user', contraseña = '$pass', nombre = '$nombre', apellido = '$apellido', jefe = '$jefe', departamento = '$departamento', tripulacion = '$tripulacion' WHERE id = '$id'");
			$result=$query->execute();
			if (!$result) {
				die('Query Failed.');
			}
		}
		$_SESSION['name']=$nombre;
		
	}

	
?>