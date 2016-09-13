<?php
// DB Connection
include __DIR__ . '/../connector.php';

class Recover {
	
	function __construct() {
		$db = new Connector();
	    $this->conn = $db->DBConnection();
	}

	function setNewPassword($id, $pass) {
		try {
			$stmt = $this->conn->prepare("UPDATE users SET password  = :password WHERE id = :id ;");
			$stmt->bindValue(":password", $pass, PDO::PARAM_STR );
			$stmt->bindValue(':id', $id, PDO::PARAM_STR );
			$stmt->execute();	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	function generateTemporaryKey($id) {
		$point1 = (date("s")+1) + (date("i")+1) + (date("H")+1);
		$point2 = (date("s")+1) * (date("i")+1) * (date("H")+1);
		$key = rand($point1, $point2) * 1234;
		$key = hash('sha256', $key);
		try {
			$stmt = $this->conn->prepare("UPDATE login_user SET tmp_key = :key WHERE user_id = :id ;");
			$stmt->bindValue(":key", $key, PDO::PARAM_STR );
			$stmt->bindValue(':id', $id, PDO::PARAM_STR );
			$stmt->execute();	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}

$r = new Recover();
$r->generateTemporaryKey(1);