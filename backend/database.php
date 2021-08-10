<?php
	/**
	 * Clase usada para conectarse a la base de datos 
	 */
	class Database
	{
		private $host;
		private $db;
		private $user;
		private $pass;
		
		public function __construct()
		{
			$this->host = 'sql100.eshost.com.ar';
			$this->db = 'eshos_27885653_aes';
			$this->user = 'eshos_27885653';
			$this->pass = '9vb3r8387380';
		}
		function connect(){
			try{
				$connection = "mysql:host=".$this->host.";dbname=".$this->db;
				$options = [
					PDO::ATTR_ERRMODE		=>PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES	=>false,
				];

				$pdo = new PDO($connection,$this->user,$this->pass,$options);

				return $pdo;
			}catch(PDOException $e){
				print_r('Error connection: '.$e->getMessage());
			}
		}
		function getHost(){
			return $this->host;
		}
		function getDb(){
			return $this->db;
		}
		function getUser(){
			return $this->user;
		}
		function getPassword(){
			return $this->pass;
		}
	}
?>
