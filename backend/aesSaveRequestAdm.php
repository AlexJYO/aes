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
		$fecha_s= $_POST['fecha_s'];
		$nombre_s= $_POST['nombre_s'];
		$nombre_lgt= $_POST['nombre_lgt'];
		$departamento= $_POST['departamento'];
		$tripulacion= $_POST['tripulacion'];

		$descripcion= $_POST['descripcion'];
		$cantidad= $_POST['cantidad'];
		$u_medida= $_POST['u_medida'];
		$no_parte= $_POST['no_parte'];
		$codigo_gm= $_POST['codigo_gm'];
		$marca= $_POST['marca'];
		$unica_repetitiva= $_POST['unica_repetitiva'];
		$min= $_POST['min'];
		$max= $_POST['max'];
		$consumo_mensual= $_POST['consumo_mensual'];
		$consumo_mensual= $_POST['donde_se_usa'];
		$fuente_informacion= $_POST['fuente_informacion'];
		$porque1= $_POST['porque1'];
		$porque2= $_POST['porque2'];
		$porque3= $_POST['porque3'];
		$prioridad= $_POST['prioridad'];

		$alcance_trabajo= $_POST['alcance_trabajo'];
		$dibujo_tecnico= $_POST['dibujo_tecnico'];
		$muestra_foto= $_POST['muestra_foto'];
		$tipo_compra= $_POST['tipo_compra'];
		$cuenta= $_POST['cuenta'];
		$no_sc_solped= $_POST['no_sc_solped'];
		$fecha_liberacion= $_POST['fecha_liberacion'];
		$costo_unitario= $_POST['costo_unitario'];
		$costo_total_1= $_POST['costo_total_1'];
		$moneda_1= $_POST['moneda_1'];
		$tiempo_estimado= $_POST['tiempo_estimado'];
		$aprobador_actual= $_POST['aprobador_actual'];
		$comprador_sap= $_POST['comprador_sap'];
		$po= $_POST['po'];
		$fecha_po= $_POST['fecha_po'];
		$proveedor= $_POST['proveedor'];
		$fecha_realizacion= $_POST['fecha_realizacion'];
		$no_factura= $_POST['no_factura'];
		$costo_total_2= $_POST['costo_total_2'];
		$moneda_2= $_POST['moneda_2'];
		$ir= $_POST['ir'];
		$fecha_ir= $_POST['fecha_ir'];

		$query = $db->connect()->prepare("UPDATE request SET fecha_s = '$fecha_s', WHERE id = $id_request'");
		$result=$query->execute();
		if (!$result) {
			die('Query Failed.');
		}
	}

?>