<?php 
	
	session_start();
	$id_request = $_SESSION['sol'];

	include('database.php');
	$db = new Database();
	//Se realiza la conexión a la base de datos
	$conn = mysqli_connect($db->getHost(),$db->getUser(),$db->getPassword(),$db->getDb());

	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL:  ".mysqli_connect_error();
	}

	if (isset($id_request)) {
		$query = $db->connect()->prepare('SELECT *FROM request WHERE id = :id');
		$query->execute(['id' => $id_request]);
		$row = $query->fetchAll();
		$json['id']=$row[0]['id'];
		$json['fecha_s']=$row[0]['fecha_s'];
		$json['status']=$row[0]['status'];
		$json['nombre_s']=$row[0]['nombre_s'];
		$json['nombre_lgt']=$row[0]['nombre_lgt'];
		$json['departamento']=$row[0]['departamento'];
		$json['tripulacion']=$row[0]['tripulacion'];
		$json['descripcion']=$row[0]['descripcion'];
		$json['cantidad']=$row[0]['cantidad'];
		$json['u_medida']=$row[0]['u_medida'];
		$json['no_parte']=$row[0]['no_parte'];
		$json['codigo_gm']=$row[0]['codigo_gm'];
		$json['marca']=$row[0]['marca'];
		$json['unica_repetitiva']=$row[0]['unica_repetitiva'];
		$json['min']=$row[0]['min'];
		$json['max']=$row[0]['max'];
		$json['consumo_mensual']=$row[0]['consumo_mensual'];
		$json['donde_se_usa']=$row[0]['donde_se_usa'];
		$json['fuente_informacion']=$row[0]['fuente_informacion'];
		$json['porque1']=$row[0]['porque1'];
		$json['porque2']=$row[0]['porque2'];
		$json['porque3']=$row[0]['porque3'];
		$json['prioridad']=$row[0]['prioridad'];
		$json['nombre_r']=$row[0]['nombre_r'];
		$json['fecha_r']=$row[0]['fecha_r'];
		$json['alcance_trabajo']=$row[0]['alcance_trabajo'];
		$json['dibujo_tecnico']=$row[0]['dibujo_tecnico'];
		$json['muestra_foto']=$row[0]['muestra_foto'];
		$json['tipo_compra']=$row[0]['tipo_compra'];
		$json['cuenta']=$row[0]['cuenta'];
		$json['no_sc_solped']=$row[0]['no_sc_solped'];
		$json['fecha_liberacion']=$row[0]['fecha_liberacion'];
		$json['costo_unitario']=$row[0]['costo_unitario'];
		$json['costo_total_1']=$row[0]['costo_total_1'];
		$json['moneda_1']=$row[0]['moneda_1'];
		$json['tiempo_estimado']=$row[0]['tiempo_estimado'];
		$json['aprobador_actual']=$row[0]['aprobador_actual'];
		$json['comprador_sap']=$row[0]['comprador_sap'];
		$json['po']=$row[0]['po'];
		$json['fecha_po']=$row[0]['fecha_po'];
		$json['proveedor']=$row[0]['proveedor'];
		$json['fecha_realizacion']=$row[0]['fecha_realizacion'];
		$json['no_factura']=$row[0]['no_factura'];
		$json['costo_total_2']=$row[0]['costo_total_2'];
		$json['moneda_2']=$row[0]['moneda_2'];
		$json['ir']=$row[0]['ir'];
		$json['fecha_ir']=$row[0]['fecha_ir'];
		$jsonstring = json_encode($json);
		echo $jsonstring;
	
	}

?>