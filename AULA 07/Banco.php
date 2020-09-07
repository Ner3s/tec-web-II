<?php

	class Banco{
		private $dbh;
		public function __construct($tipo=null){
			if(empty($tipo)){
				//default mysql
				$dsn = 'mysql:dbname=aula;host=127.0.0.1';
				$user = 'root';
				$password = '';
				
			}else{//postegreSQL
				$dsn = 'pgsql:dbname=aula;host=127.0.0.1';
				$user = 'postegres';// usuario adm do banco
				$password = 'admlinux';// senha do banco
			}		
			try{
				$this->dbh = new PDO($dsn, $user, $password);
			}catch(PDOException $e){
				echo 'Connection failed: '. $e->getMessage();
			}
		}//fim construct 
		
		public function executar($sql){
			return $this->dbh->exec($sql);
		}
		
		public function consultar($sql){
			return $this->dbh->query($sql);
		}
	}
?>