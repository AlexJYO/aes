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
			$this->host = 'b9ovl3iko3wxf2qrjy1k-mysql.services.clever-cloud.com';
			$this->db = 'b9ovl3iko3wxf2qrjy1k';
			$this->user = 'uvwydgyg5gxuk6nv';
			$this->pass = 'SPeoMqN50NNNv5AyOXjL';
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
