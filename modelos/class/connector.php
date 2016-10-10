<?php
class Connector {
	protected $host;
	protected $user;
	protected $pass;
	protected $name;
	
	function __construct() {
		$this->host = "localhost";
		$this->user = "clubdem1_root";
		$this->pass = "521/by.rk";
		$this->name = "clubdem1_modelos";
	}

	// Database connection
	function DBConnection() {
	    $pdo = new PDO("mysql:host=". $this->host .";dbname=" . $this->name, $this->user, $this->pass);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	    return $pdo;
	}
}