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

	$query = $db->connect()->prepare('SELECT * FROM leader');
	$query->execute();
	$rows = $query->fetchAll();
	$i=0;
	if(!(count($rows)==0))
	{
		foreach ($rows as $row) {
?>
			<tr userId="<?php echo $row['id']; ?>">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['gmin']; ?></td>
			<td class="tableNom">
				<a href="#" class="nombreL"><?php echo $row['nombre']; ?></a>
			</td>
			<td><?php echo $row['puesto']; ?></td>
			<td style=" border: inset 0pt">
				<button class="del-leader btn btn-danger">Eliminar</button>
			</td>
			</tr>
<?php
		}
	}
?>