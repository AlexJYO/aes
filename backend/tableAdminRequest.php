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

	$query = $db->connect()->prepare('SELECT * FROM request');
	$query->execute();
	$rows = $query->fetchAll();
	$i=0;
	if(!(count($rows)==0))
	{
		foreach ($rows as $row) {

?>
			<tr userId="<?php echo $row['id']; ?>">
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['nombre_s']; ?></td>
			<td><?php echo $row['nombre_lgt']; ?></td>
			<td><?php echo $row['descripcion']; ?></td>
			<td><?php echo $row['cantidad']; ?></td>
			<td><?php echo $row['no_parte']; ?></td>
			<td><?php echo $row['marca']; ?></td>
			<td><?php echo $row['donde_se_usa']; ?></td>
			<td><?php echo $row['prioridad']; ?></td>
			<?php 
				
				$calBar = 10;
				if ($row['tiempo_estimado']=='' || $row['tiempo_estimado']==NULL) {
					$fe=0;
				}else{
					$fe=1;
				}
				if($row['no_sc_solped']>0)
				{
					$calBar+=10;
					if ($row['nivel_ap']>0) {
						if ($row['nivel_ap']==1) {
							$calBar+=10;
						}
						if ($row['nivel_ap']==2) {
						$calBar+=20;
						}
						if ($row['nivel_ap']==3) {
						$calBar+=30;
						}
						if ($row['nivel_ap']==4) {
							$calBar+=40;
							if ($row['po']>0) {
								$calBar+=10;
								if ($fe>0) {
									$calBar+=10;
								}
							}
						}

					}
				}
				if ($row['status']=='Cancelado') {
					$colorS='style="color: red;"';
					$htmlStatus = $row['status'];
					

				}else{
					if ($row['status']=='Finalizado') {
						$colorS='style="color: green;"';
						$htmlStatus = $row['status'];
					}else{
						$htmlStatus= '<div class="progress" style="height:25px"><div class="progress-bar" role="progressbar" style="width: '.$calBar.'%; height:25px;" aria-valuenow="'.$calBar.'" aria-valuemin="0" aria-valuemax="100">'.$calBar.'</div></div>';
					}
				}
			?>
			<td <?php if($row['status']=='Cancelado' || $row['status']=='Finalizado'){echo $colorS;}?>>
				<?php echo $htmlStatus; ?>
				<!-- <div class="progress" style="height:25px">
  					<div class="progress-bar" role="progressbar" style="width: <?php echo $calBar?>%; height:25px;" aria-valuenow="<?php echo $calBar?>" aria-valuemin="0" aria-valuemax="100"><?php echo $calBar?>
  					</div>
				</div> -->
			</td>
			<td style=" border: inset 0pt">
				<button class="open-sol btn btn-primary">Abrir</button>
			</td>
			</tr>
<?php
		}
	}
?>