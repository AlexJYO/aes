<?php
	$ban = 0;
	//Cada acción actualizará la fecha inicial
	session_start();
	$_SESSION['fecha']=date("Y-n-j H:i:s");
	//Con estos dos comandas se actualiza
	
	include('database.php');
	$db = new Database();
	//Se realiza la conexión a la base de datos
	$conn = mysqli_connect($db->getHost(),$db->getUser(),$db->getPassword(),$db->getDb());

	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL:  ".mysqli_connect_error();
	}

	$num_p = $_POST['num_p'];
	$marca = $_POST['marca'];
	$c_e = $_POST['c_e'];
	$v_e = $_POST['v_e'];
	$cost = $_POST['cost'];

	$query = $db->connect()->prepare('SELECT *FROM item WHERE num_p = :no_parte AND marca = :marca');
		$query->execute(['no_parte' => $num_p, 'marca' => $marca]);
		$row = $query->fetchAll();

		if($row == true)
		{
			
			$c_p = $row[0]['c_p'];
			$v_p = $row[0]['v_p'];
			$c_f = $row[0]['c_f'];
			$v_f = $row[0]['v_f'];
			$v_d = $row[0]['v_d'];

			$p_p = 0.0;
			$p_f = 0.0;
			$p_e = 0.0;
			$tol = 0.00001;
			if(abs(20.0-$c_p)<$tol)
			{
				$p_p = 1.0;
			}else{
				if(abs(10-$c_p)<$tol)
				{
					$p_p = 0.5;
				}else{
					$p_p = 0.5;
				}
			}

			if(abs(20.0-$c_f)<$tol)
			{
				$p_f = 1.0;
			}else{
				if(abs(10-$c_f)<$tol)
				{
					$p_f = 0.5;
				}else{
					$p_f = 0.5;
				}
			}

			if(abs(7.0-$c_e)<$tol)
			{
				$p_e = 0.2;
			}else{
				if(abs(5.0-$c_e)<$tol)
				{
					$p_e = 0.2;
				}else{
					$p_e = 0.3;
				}
			}
			$v_m=0.0;
			$v_m += 10.0 - (10.0 - 5.0)*(0.5);
			$v_m += 10.0 - (10.0 - 5.0)*(0.5);
			$v_m += 5.0 - (10.0 - 5.0)*(0.2);
			$v_m += 15.0 - (10.0 -5.0)*(1.5);

			$v_t = 0.0;
			$v_t += $c_p - (10.0 - $v_p)*($p_p);
			$v_t += $c_f - (10.0 - $v_f)*($p_f);
			$v_t += $c_e - (10.0 - $v_e)*($p_e);
			$v_t += 15.0 - (10.0 - $v_d)*(1.5);

			$ban = $v_t;
			$priority="";
			if($cost<10000)
			{
				if($v_t>=$v_m)
				{
					$priority= 'A';
					
				}else{
					
					$priority= 'D';
				}
			}else{
					if($cost>=10000 && $cost<48000)
					{
						if($v_t>=$v_m)
						{
							$priority= 'B';
							
						}else{
							
							$priority= 'E';
						}
					}else{
							if($v_t>=$v_m)
							{
								$priority= 'C';
								
							}else{
		
								$priority= 'F';
							}
					}
			}
			$id= $row[0]['id'];
			$query = $db->connect()->prepare("UPDATE item SET cost = '$cost', c_e = '$c_e', v_e = '$v_e', priority = '$priority' WHERE id = '$id'");
			$result=$query->execute();
			if (!$result) {
				die('Query Failed.');
			}

			$id_request = $_SESSION['sol'];
			$query = $db->connect()->prepare("UPDATE request SET prioridad = '$priority' WHERE id = '$id_request'");
			$result=$query->execute();
			if (!$result) {
				die('Query Failed.');
			}
			
		}


		echo $ban;
?>