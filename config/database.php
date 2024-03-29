<?php 

class Database {

	private $host = 'localhost';
	private $db_name = 'php_oop_crud_level_1';
	private $username = 'root';
	private $password = '';
	public $conn;

	public function get_db_connection() {

		$this->conn = null;

		try {
			$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" .$this->db_name, $this->username, $this->password);
		}catch(PDOException $exception) {
			echo 'Connection error: ' . $exception->getMessage();
		}

		return $this->conn;

	}
}


?>