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
		$query = $db->connect()->prepare('SELECT *FROM user WHERE id = :id');
		$query->execute(['id' => $id]);
		$row = $query->fetchAll();
		$json['name_all']=$row[0]['nombre']." ".$row[0]['apellido'];

		date_default_timezone_set("America/Mexico_City");
		$today = getdate();
		$day = $today['year'].'-'.$today['mon'].'-'.$today['mday']." ".$today['hours'].":".$today['minutes'].":".$today['seconds'];

		$json['date']=$day;
		$jsonstring = json_encode($json);
		echo $jsonstring;
	
	}
?>