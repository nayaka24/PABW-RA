<?php
class DBConnection{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'test1';
	protected $connection;

	public function __construct(){
		if (!isset($this->connection)) {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
			if (!$this->connection) {
				echo "Cannot connect to database server";
				exit;
			}
		}
	return $this->connection;
	}
}
?>