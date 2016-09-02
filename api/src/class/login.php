<?php
// DB Connection
include __DIR__ . '/../connector.php';

class Login {
	private $conn;
	private $user;
	private $pass;
	private $response;

	protected $expected = array();
	
	function __construct() {
		$db = new Connector();
	    $this->conn = $db->DBConnection();
	    $this->response = array(
	    	'1' => 'Usuario y password incorrectos',
	    	'2' => 'Bienvenid@',
			'3' => 'Usuario correcto, password incorrecto',
			'4' => 'Password correcto, usuario incorrecto',
			'5' => 'Login incorrecto'
	    	);
	}

	// Valida el inicio de sesion
	function apiLogin($user, $pass) {
		$status = ($this->getNumberData($user, $pass) == 1) ? 1 : 0 ;
		return array('status' => $status);
	}

	// Devuelve el numero de datos obtenido
	function getNumberData($user, $pass) {
		$result = $this->conn->query("SELECT * FROM users WHERE 
			email = '" . $user . "' and password  = '" . $pass . "';")->fetchAll();
		return count($result);
	}

	// To do...
	// Registra el intento de inicio de sesion
	function setIntentLogin($user) {
		$intents = $this->getIntentsLogin($user);
		$date = date("Y-m-d H:i:s");

		if ($intents == 0) {
			try {
				$stmt = $this->conn->prepare("UPDATE login_user SET date_start = :date1 WHERE user_id = (SELECT id FROM users WHERE email = :user) ;");
				$stmt->bindValue(":date1", $date, PDO::PARAM_STR );
				$stmt->bindValue(':user', $user, PDO::PARAM_STR );
				$stmt->execute();	
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		} elseif ($intents == 3) {
			//  Query para actualizar + fecha de bloqueo
			$stmt = $this->conn->prepare("UPDATE login_user SET date_start = :date1, date_end = :date2,  WHERE user_id = SELECT id FROM users WHERE email = :user ;");
		} else {
			// Query para actualizar 
		}
		return 'ok';
	}

	// Crea la fecha de bloqueo
	function createDateBlock() {
		$actualDate = date('Y-m-d H:i:s');
		$newDate = strtotime ( '+1 day' , strtotime ( $actualDate ) ) ;
		$newDate = date ( 'Y-m-d H:i:s' , $newDate );
		return $newDate;
	}

	// Devuelve el numero de intentos de inicio de sesion
	function getIntentsLogin($user) {
		$result = $this->conn->query("SELECT intents FROM login_user WHERE 
			user_id = (SELECT id from users WHERE email = '" . $user . "');")->fetchAll();
		return count($result);
	}

	// Valida el inicio de sesion mostrando errores errores
	function getLoginErrors($user, $pass) {
		$this->setUser($user);
		$this->setPassword($pass);
		$val = ($this->getNumberDataError() == 1) ? $this->getSuccessError() : $this->response[1];

		return $val;
	}

	// Valida el inicio de sesion, devuelve un mensaje
	function getSuccessError() {
		$status = ($this->getNumberData($this->user, $this->pass) == 1) ? $this->response[2] : $this->validateUserError() ;
		return $status;
	}

	// Devuelve el numero de datos obtenido
	function getNumberDataError() {
		$result = $this->conn->query("SELECT * FROM users WHERE 
			email = '" . $this->user . "' or password  = '" . $this->pass . "';")->fetchAll();
		$this->setExpected($result[0]['email'], $result[0]['password']);
		return count($result);
	}

	// Valida el usuario
	function validateUserError() {
		$status = ($this->user == $this->expected['user']) ? $this->response[3] : $this->validatePasswordError() ;
		return $status;
	}

	// Valida la contrasena
	function validatePasswordError() {
		$status = ($this->pass == $this->expected['pass']) ? $this->response[4] : $this->response[5] ;
		return $status;
	}

	// Setter data esperada
	function setExpected($user, $pass) {
		$this->expected = array('user' => $user, 'pass' => $pass);
	}

	// Setter del usuario
	function setUser($user) {
		$this->user = $user;
	}

	// Setter del password
	function setPassword($pass) {
		$this->pass = $pass;
	}
}

$l = new Login();
//echo $l->setIntentLogin(1);
// Logueado
//print_r( $l->apiLogin("rot", "123") );
// Logueado con errores
//echo $l->getLoginErrors("rot", "23");