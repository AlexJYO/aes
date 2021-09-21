<?php

	//Cada acción actualizará la fecha inicial
	session_start();
	$_SESSION['fecha']=date("Y-n-j H:i:s");
	//Con estos dos comandas se actualiza
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
	$today = getdate();
	$date_s = $today['year'].'-'.$today['mon'].'-'.$today['mday'].' '.$today['hours'].':'.$today['minutes'].':'.$today['seconds'];
				//If form submitted, insert  values into the database.

	$user = $_SESSION['gmin'];
	
	$name = stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($conn,$name);
	$lgt = stripslashes($_REQUEST['lgt']);
	$lgt = mysqli_real_escape_string($conn,$lgt);
	$department = stripslashes($_REQUEST['department']);
	$department = mysqli_real_escape_string($conn,$department);
	$crew = stripslashes($_REQUEST['crew']);
	$crew = mysqli_real_escape_string($conn,$crew);
	
	$description = stripslashes($_REQUEST['description']);
	$description = mysqli_real_escape_string($conn,$description);
	$quantity = stripslashes($_REQUEST['quantity']);
	$quantity = mysqli_real_escape_string($conn,$quantity);
	$measure = stripslashes($_REQUEST['measure']);
	$measure = mysqli_real_escape_string($conn,$measure);
	$noParte = stripslashes($_REQUEST['noParte']);
	$noParte = mysqli_real_escape_string($conn,$noParte);
	$gmCode = stripslashes($_POST['gmCode']);
	$gmCode = mysqli_real_escape_string($conn,$gmCode);
	$brand = stripslashes($_REQUEST['brand']);
	$brand = mysqli_real_escape_string($conn,$brand);
	$buyType = stripslashes($_REQUEST['buyType']);
	$buyType = mysqli_real_escape_string($conn,$buyType);
	$min = stripslashes($_REQUEST['min']);
	$min = mysqli_real_escape_string($conn,$min);
	if (!(is_numeric($min))) {
    	$min=0;
	} 
	$max = stripslashes($_REQUEST['max']);
	$max = mysqli_real_escape_string($conn,$max);
	if (!(is_numeric($max))) {
    	$max=0;
	} 
	$monthlyCon = stripslashes($_REQUEST['monthlyCon']);
	$monthlyCon = mysqli_real_escape_string($conn,$monthlyCon);
	$whereUse = stripslashes($_REQUEST['whereUse']);
	$whereUse = mysqli_real_escape_string($conn,$whereUse);
	$sourceInfo = stripslashes($_REQUEST['sourceInfo']);
	$sourceInfo = mysqli_real_escape_string($conn,$sourceInfo);
	$why1 = stripslashes($_REQUEST['why1']);
	$why1 = mysqli_real_escape_string($conn,$why1);
	$why2 = stripslashes($_REQUEST['why2']);
	$why2 = mysqli_real_escape_string($conn,$why2);
	$why3 = stripslashes($_REQUEST['why3']);
	$why3 = mysqli_real_escape_string($conn,$why3);
	/*$priority = stripslashes($_REQUEST['priority']);
	$priority = mysqli_real_escape_string($conn,$priority);
*/
	$status = 'En Proceso';

	//Insertar elemento
	//Se usan prepare y execute para realizar la insersion de un nuevo elemento
	$query = $db->connect()->prepare("INSERT INTO request (id, fecha_s, gmin, nombre_s, nombre_lgt, departamento, tripulacion, descripcion, cantidad, u_medida, no_parte, codigo_gm, marca, unica_repetitiva, min, max, consumo_mensual, donde_se_usa, fuente_informacion, porque1, porque2, porque3, prioridad, alcance_trabajo, dibujo_tecnico, muestra_foto, nombre_r, fecha_r, tipo_compra, status, cuenta, no_sc_solped, fecha_liberacion, costo_unitario, costo_total_1, moneda_1, tiempo_estimado, nivel_ap, aprobador_actual, comprador_sap, po, fecha_po, proveedor, fecha_realizacion, no_factura, costo_total_2, moneda_2, ir, fecha_ir) VALUES (NULL, '$date_s', '$user', '$name', '$lgt', '$department', '$crew', '$description', '$quantity', '$measure', '$noParte', '$gmCode', '$brand', '$buyType', '$min', '$max', '$monthlyCon', '$whereUse', '$sourceInfo', '$why1', '$why2', '$why3', '', '', '', '', '', NULL, '', '$status', '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', NULL, NULL, '', NULL, '', NULL, '', '', NULL)");

	$result=$query->execute();

	if ($result) {
		$banReg=1;
		$query = $db->connect()->prepare('SELECT id FROM request WHERE id = (SELECT MAX(id) FROM request)');
		$query->execute();
		$row = $query->fetchAll();

		$_SESSION['sol']=$row[0]['id'];
	}

	include_once 'aesNewItem.php';
	

	

	echo $banReg;
?>