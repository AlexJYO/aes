<?php
	session_start();

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
		$query = $db->connect()->prepare('SELECT *FROM request WHERE id = :id');
		$query->execute(['id' => $id]);
		$row = $query->fetchAll();
		$jsonstring = json_encode($row[0]);
		echo $jsonstring;
	
	}
?>