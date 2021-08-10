<?php
	$rol = 0;
	include_once 'database.php';


	session_start();
	if (isset($_GET['cerrar_sesion'])){
		session_unset();

		//destroy the session
		session_destroy();
	}
	if (isset($_SESSION['rol'])){
		switch ($_SESSION['rol']){
			case 1:
				header('location: ../home/aesAdminInfo.php');
				break;
			case 2:
				header('location: ../home/aesUserInfo.php');
				break;
			default:
				echo "Error: Tipo de usuario no aceptado";
		}
	}
	

	if (isset($_POST['user']) && isset($_POST['pass'])){
		$db = new Database();
		$sql = mysqli_connect($db->getHost(),$db->getUser(),$db->getPassword(),$db->getDb());

		$user = stripslashes($_POST['user']);
		$user = mysqli_real_escape_string($sql,$user);
		$pass2 = stripslashes($_POST['pass']);
		$pass2 = mysqli_real_escape_string($sql,$pass2);
		$pass = md5($pass2);

		$query = $db->connect()->prepare('SELECT *FROM user WHERE usuario = :user AND contraseña = :pass');
		$query->execute(['user' => $user, 'pass' => $pass]);
		$row = $query->fetchAll();
		if($row == true && strcmp($user,$row[0]['usuario']) == 0){

			$rol = $row[0]['tipo'];
			$_SESSION['rol'] = $rol;
			$_SESSION['fecha'] = date("Y-n-j H:i:s");
			$_SESSION['name']=$row[0]['nombre'];
			$_SESSION['id']=$row[0]['id'];
			$_SESSION['gmin']=$row[0]['usuario'];
			$_SESSION['jefe']=$row[0]['jefe'];
			if ($rol==1)
				$_SESSION['timeOff']=3600;
			else
				$_SESSION['timeOff']=600;
		}
		
	}
	echo $rol;
?>