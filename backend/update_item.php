<?php
	
	$banI=0;
	//Cada acción actualizará la fecha inicial
	session_start();
	$_SESSION['fecha']=date("Y-n-j H:i:s");
	//Con estos dos comandas se actualiza

	$id = $_POST['id'];
	
	include('database.php');
	$db = new Database();
	//Se realiza la conexión a la base de datos
	$conn = mysqli_connect($db->getHost(),$db->getUser(),$db->getPassword(),$db->getDb());

	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL:  ".mysqli_connect_error();
	}
	if (isset($id)) {

		$num_p= stripslashes($_POST['nop_i_val']);
		$num_p= mysqli_real_escape_string($conn,$num_p);
		$marca= stripslashes($_POST['marca_i_val']);
		$marca= mysqli_real_escape_string($conn,$marca);
		$cost= stripslashes($_POST['cost_i_val']);
		$cost= mysqli_real_escape_string($conn,$cost);
		if (!(is_numeric($cost))) {
    		$cost=0.0;
		} 

		$query = $db->connect()->prepare("UPDATE item SET num_p = '$num_p', marca = '$marca', cost = '$cost' WHERE id = '$id'");
		$result=$query->execute();
		if (!$result) {
			die('Query Failed.');
		}else{
			$banI=1;
		}
		
		
	}
	echo $banI;
	
?>