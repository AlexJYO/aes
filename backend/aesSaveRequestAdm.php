<?php
	
	//Cada acción actualizará la fecha inicial
	session_start();
	$_SESSION['fecha']=date("Y-n-j H:i:s");
	//Con estos dos comandas se actualiza
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
		$status= $_POST['status'];
		$nombre_s= $_POST['nombre_s'];
		$nombre_lgt= $_POST['nombre_lgt'];
		$departamento= $_POST['departamento'];
		$tripulacion= $_POST['tripulacion'];

		$descripcion = stripslashes($_POST['descripcion']);
		$descripcion = mysqli_real_escape_string($conn,$descripcion);
		$cantidad= $_POST['cantidad'];
		$u_medida= $_POST['u_medida'];
		$no_parte = stripslashes($_POST['no_parte']);
		$no_parte = mysqli_real_escape_string($conn,$no_parte);
		$codigo_gm = stripslashes($_POST['codigo_gm']);
		$codigo_gm = mysqli_real_escape_string($conn,$codigo_gm);
		$marca = stripslashes($_POST['marca']);
		$marca = mysqli_real_escape_string($conn,$marca);
		$unica_repetitiva= $_POST['unica_repetitiva'];
		$min= $_POST['min'];
		if (!(is_numeric($min))) {
    		$min=0;
		} 
		$max= $_POST['max'];
		if (!(is_numeric($max))) {
    		$max=0;
		} 
		$consumo_mensual = stripslashes($_POST['consumo_mensual']);
		$consumo_mensual = mysqli_real_escape_string($conn,$consumo_mensual);
		$donde_se_usa = stripslashes($_POST['donde_se_usa']);
		$donde_se_usa = mysqli_real_escape_string($conn,$donde_se_usa);
		$fuente_informacion = stripslashes($_POST['fuente_informacion']);
		$fuente_informacion = mysqli_real_escape_string($conn,$fuente_informacion);
		$porque1 = stripslashes($_POST['porque1']);
		$porque1 = mysqli_real_escape_string($conn,$porque1);
		$porque2 = stripslashes($_POST['porque2']);
		$porque2 = mysqli_real_escape_string($conn,$porque2);
		$porque3 = stripslashes($_POST['porque3']);
		$porque3 = mysqli_real_escape_string($conn,$porque3);
		$prioridad= $_POST['prioridad'];
		$alcance_trabajo = stripslashes($_POST['alcance_trabajo']);
		$alcance_trabajo = mysqli_real_escape_string($conn,$alcance_trabajo);
		$dibujo_tecnico = stripslashes($_POST['dibujo_tecnico']);
		$dibujo_tecnico = mysqli_real_escape_string($conn,$dibujo_tecnico);
		$muestra_foto = stripslashes($_POST['muestra_foto']);
		$muestra_foto = mysqli_real_escape_string($conn,$muestra_foto);
		$tipo_compra= $_POST['tipo_compra'];
		$cuenta= $_POST['cuenta'];
		$no_sc_solped= $_POST['no_sc_solped'];
		if (!(is_numeric($no_sc_solped))) {
    		$no_sc_solped=0;
		} 
		$fecha_liberacion= $_POST['fecha_l'];
		$costo_unitario= $_POST['costo_unitario'];
		if (!(is_numeric($costo_unitario))) {
    		$costo_unitario=0.0;
		} 
		$costo_total_1= $_POST['costo_total_1'];
		if (!(is_numeric($costo_total_1))) {
    		$costo_total_1=0.0;
		} 
		$moneda_1 = stripslashes($_POST['moneda_1']);
		$moneda_1 = mysqli_real_escape_string($conn,$moneda_1);
		$tiempo_estimado= $_POST['tiempo_estimado'];
		$aprobador_actual = stripslashes($_POST['aprobador_actual']);
		$aprobador_actual = mysqli_real_escape_string($conn,$aprobador_actual);
		$comprador_sap = stripslashes($_POST['comprador_sap']);
		$comprador_sap = mysqli_real_escape_string($conn,$comprador_sap);
		$po= $_POST['po'];
		if (!(is_numeric($po))) {
    		$po=0;
		} 
		$fecha_po= $_POST['fecha_po'];
		$proveedor = stripslashes($_POST['proveedor']);
		$proveedor = mysqli_real_escape_string($conn,$proveedor);
		$fecha_realizacion= $_POST['fecha_realizacion'];
		$no_factura = stripslashes($_POST['no_factura']);
		$no_factura = mysqli_real_escape_string($conn,$no_factura);
		$costo_total_2= $_POST['costo_total_2'];
		if (!(is_numeric($costo_total_2))) {
    		$costo_total_2=0.0;
		} 
		$moneda_2 = stripslashes($_POST['moneda_2']);
		$moneda_2 = mysqli_real_escape_string($conn,$moneda_2);
		$ir = stripslashes($_POST['ir']);
		$ir = mysqli_real_escape_string($conn,$ir);
		$fecha_ir= $_POST['fecha_ir'];

		$query = $db->connect()->prepare("UPDATE request SET fecha_s='$fecha_s', status= '$status', nombre_s='$nombre_s', nombre_lgt='$nombre_lgt', departamento='$departamento', tripulacion='$tripulacion', descripcion='$descripcion', cantidad='$cantidad', u_medida='$u_medida', no_parte='$no_parte', codigo_gm='$codigo_gm', marca='$marca', unica_repetitiva='$unica_repetitiva', min='$min', max='$max', consumo_mensual='$consumo_mensual', donde_se_usa='$donde_se_usa', fuente_informacion='$fuente_informacion', porque1='$porque1', porque2='$porque2', porque3='$porque3', prioridad='$prioridad', alcance_trabajo='$alcance_trabajo', dibujo_tecnico='$dibujo_tecnico', muestra_foto='$muestra_foto', tipo_compra='$tipo_compra', cuenta='$cuenta', no_sc_solped='$no_sc_solped',  costo_unitario='$costo_unitario', costo_total_1='$costo_total_1', moneda_1='$moneda_1',  aprobador_actual='$aprobador_actual', comprador_sap='$comprador_sap', po='$po',  proveedor='$proveedor', no_factura='$no_factura', costo_total_2='$costo_total_2', moneda_2='$moneda_2', ir='$ir' WHERE id = '$id_request'");
		$result=$query->execute();
		if (!$result) {
			die('Query Failed.');
		}
		if($fecha_ir!="")
		{
			$query = $db->connect()->prepare("UPDATE request SET fecha_ir='$fecha_ir' WHERE id = '$id_request'");
			$result=$query->execute();
		}
		if($fecha_realizacion!="")
		{
			$query = $db->connect()->prepare("UPDATE request SET fecha_realizacion='$fecha_realizacion' WHERE id = '$id_request'");
			$result=$query->execute();
		}
		if($tiempo_estimado!="")
		{
			$query = $db->connect()->prepare("UPDATE request SET tiempo_estimado='$tiempo_estimado' WHERE id = '$id_request'");
			$result=$query->execute();
		}
		if(!($fecha_liberacion == ""))
		{
			$query = $db->connect()->prepare("UPDATE request SET fecha_liberacion='$fecha_liberacion' WHERE id = '$id_request'");
			$result=$query->execute();
		}
		if($fecha_po!="")
		{
			$query = $db->connect()->prepare("UPDATE request SET fecha_po='$fecha_po' WHERE id = '$id_request'");
			$result=$query->execute();
		}

		$id = $_SESSION['id'];
		$query = $db->connect()->prepare('SELECT *FROM user WHERE id = :id');
		$query->execute(['id' => $id]);
		$row = $query->fetchAll();

		$name_all=$row[0]['nombre']." ".$row[0]['apellido'];
		date_default_timezone_set("America/Mexico_City");
		$today = getdate();
		$day = $today['year'].'-'.$today['mon'].'-'.$today['mday']." ".$today['hours'].":".$today['minutes'].":".$today['seconds'];

		$query = $db->connect()->prepare("UPDATE request SET nombre_r='$name_all', fecha_r='$day' WHERE id = '$id_request'");
			$result=$query->execute();
	}

?>