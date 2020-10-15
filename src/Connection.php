<?php
namespace pablovf\model;

use PDO;

class Connection {

	private $arrayConn;
	private $sgbd;
	private $conn;

	function __construct($sgbd, $arrayConn) {
		$this->sgbd = $sgbd;
		$this->arrayConn = $arrayConn;

		$this->conn = $this->connectionFactory();
	}

	function connectionFactory() {
		try {

			$conn = new PDO(
				$this->sgbd . ':' . 
				'host=' . $this->arrayConn["host"] . ';' . 
				'dbname=' . $this->arrayConn["dbname"], 
				$this->arrayConn["user"], 
				$this->arrayConn["password"],
				[
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
				]
			);

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
		}
	}

	function getConnection() {
		return $this->conn;
	}
}
