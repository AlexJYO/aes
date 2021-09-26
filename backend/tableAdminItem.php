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

	$query = $db->connect()->prepare('SELECT * FROM item');
	$query->execute();
	$rows = $query->fetchAll();
	$i=0;
	if(!(count($rows)==0))
	{
		foreach ($rows as $row) {

?>
			<tr userId="<?php echo $row['id']; ?>">
				<td><?php echo $row['id']; ?></td>
				<td>
					<input type="hidden" name="no_p" style="width:150px;">
					<span><?php echo $row['num_p']; ?></span>
				</td>
				<td >
					<input type="hidden" name="marca_p" style="width:150px;">
					<span><?php echo $row['marca']; ?></span>
				</td>
				<td>
					<input type="hidden" name="cost_p" style="width:150px;">
					<span><?php echo $row['cost']; ?></span>
				</td>
				<td><?php echo $row['priority']; ?></td>
				<td  class="input-group">
					
					<button class="modif_item btn btn-success form-control" style="zoom: 70%;">Modificar</button>
				
					<button class="eli_item btn btn-danger form-control ms-1" style="zoom: 70%;">Eliminar</button>

					<button  class="save_item btn btn-primary form-control" style="zoom: 70%;" hidden="true">Guardar</button>
				
					<button  class="can_item btn btn-warning form-control ms-1" style="zoom: 70%;" hidden="true">Cancelar</button>
				</td>
			</tr>
<?php
		}
	}
?>