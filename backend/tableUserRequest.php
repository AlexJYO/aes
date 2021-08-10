<?php

	//Cada acción actualizará la fecha inicial
	//session_start();
	$_SESSION['fecha']=date("Y-n-j H:i:s");
	//Con estos dos comandas se actualiza
	
	include('database.php');
	
	$db = new Database();
	//Se realiza la conexión a la base de datos
	$conn = mysqli_connect($db->getHost(),$db->getUser(),$db->getPassword(),$db->getDb());		
	// Check connection
	if (mysqli_connect_errno()) {
		die("Failed to connect to MySQL:  ".mysqli_connect_error()); 
	}
	$gmin = $_SESSION['gmin'];
	// $jefe = $_SESSION['jefe'];
	// $query = $db->connect()->prepare('SELECT * FROM request WHERE gmin = :gmin OR nombre_lgt = :jefe');
	// $query->execute(['gmin' => $gmin, 'jefe' => $jefe]);
	$query = $db->connect()->prepare('SELECT * FROM request WHERE gmin = :gmin');
	$query->execute(['gmin' => $gmin]);
	
	$rows = $query->fetchAll();
	$i=0;
	if(!(count($rows)==0))
	{
		foreach ($rows as $row) {
?>
			<tr userId="<?php echo $row['id']; ?>">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nombre_lgt']; ?></td>
			<td><?php echo $row['descripcion']; ?></td>
			<td><?php echo $row['cantidad']; ?></td>
			<td><?php echo $row['no_parte']; ?></td>
			<td><?php echo $row['marca']; ?></td>
			<td><?php echo $row['donde_se_usa']; ?></td>
			<td><?php echo $row['prioridad']; ?></td>
			<td style=" border: inset 0pt">
				<button class="open-sol btn btn-primary">Abrir</button>
			</td>
			</tr>
<?php
		}
	}
?>