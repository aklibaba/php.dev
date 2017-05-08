<?php

class Database {
	private $host = 'localhost';
	private $user = 'root';
	private $password = 'ZAQ!2wsx';
	private $dbname = 'Blog';

	private $dbh;
	private $error;
	private $statement;

	public function __construct() {
		//Set DSN
		$dsn = "mysql:host={$this->host};dbname={$this->dbname}";
		echo $dsn;

		//Set Options
		$options = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
		];

		//Create new PDO
		try {
			$this->dbh = new PDO( $dsn, $this->user, $this->password, $options );
		} catch ( PDOException $e ) {
			$this->error = $e->getMessage();
			echo $this->error;
		}
	}
}