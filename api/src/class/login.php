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
	    try {
            $db = new Connector();
            $this->conn = $db->DBConnection();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
	    $this->response = array(
	    	'1' => 'Usuario y password incorrectos',
	    	'2' => 'ok',
			'3' => 'Usuario correcto, password incorrecto',
			'4' => 'Password correcto, usuario incorrecto',
			'5' => 'Login incorrecto',
            '6' => 'Cuenta bloqueada'
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
	function setIntentLogin() {
		$intents = $this->getIntentsLogin(1);
		$date = date("Y-m-d H:i:s");

        // Si intents == 0, lo actualiza a 1 y coloca la fecha de inicio
		if ($intents == 0) {
			try {
				$stmt = $this->conn->prepare("UPDATE login_user SET date_start = :date1, intents = 1 WHERE user_id = 1 ;");
				$stmt->bindValue(":date1", $date, PDO::PARAM_STR );
				$stmt->execute();	
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		} elseif ($intents == 3) {
		    // Si intentes == 3, verifica si la cuenta esta bloqueada, si no la bloquea, si esta bloqueada no hace nada
		    if (!$this->isLocked(1)) {
		        try {
		            //  Query para actualizar + fecha de bloqueo
		            $stmt = $this->conn->prepare("UPDATE login_user SET date_start = :date1, date_end = :date2  WHERE user_id = 1 ;");
		            $stmt->bindValue(":date1", $date, PDO::PARAM_STR);
		            $stmt->bindValue(":date2", $this->createDateBlock(), PDO::PARAM_STR);
		            $stmt->execute();
		        } catch (PDOException $e) {
		            echo $e->getMessage();
		        }
            }
		} else {
			// Actualiza el intents
            $intents++;
            try {
                $stmt = $this->conn->prepare("UPDATE login_user SET intents = :intents WHERE user_id = 1 ;");
                $stmt->bindValue(":intents", $intents, PDO::PARAM_INT);
                $stmt->execute();
            } catch  (PDOException $e) {
                echo $e->getMessage();
            }
		}
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
		$result = $this->conn->query("SELECT intents FROM login_user WHERE user_id = $user;")->fetchAll();
		return $result[0]["intents"];
	}

	// Valida el inicio de sesion mostrando errores errores
	function getLoginErrors($user, $pass) {
		$this->setUser($user);
		//$this->setPassword(hash("sha256", $pass));
        $this->setPassword($pass);

        // Actualiza el numero de intents
        $this->setIntentLogin();

        if ($this->isLocked(1)) {
            $val = $this->response[6];
        } else {
            $val = ($this->getNumberDataError() == 1) ? $this->getSuccessError() : $this->response[1];
        }

        if ($val == $this->response[2]) {
            $this->unlockAccount($user);
        }

		return $val;
	}

	// Extrae la fecha de bloqueo, si existe, la cuenta esta bloqueada
	function isLocked($user) {
	    $result = $this->conn->query("SELECT date_end FROM login_user WHERE user_id =  $user ;")->fetchAll();
	    $blockDate = $result[0]["date_end"];

        if ($blockDate) {
            return true;
        } else {
            return false;
        }
    }

	// Devuelve true si es que el timpo de bloqueo ya expiro, false si aun no y procede a desbloquar
	function getUnlockAccount($user) {
	    $actualDate = date('Y-m-d H:i:s');
        $actualDate = strtotime($actualDate);

        $result = $this->conn->query("SELECT date_end FROM login_user WHERE user_id = (SELECT id FROM users WHERE email = '" . $user . "');")->fetchAll();

        $blockDate = $result[0]["date_end"];
        $blockDate = strtotime($blockDate);

        if ($actualDate >= $blockDate) {
            // Desbloquea la cuenta
            $this->unlockAccount($user);
            $status = true;
        } else {
            $status = false;
        }

        return $status;
    }

    // Desbloquea la cuenta del usuario
    function unlockAccount($user) {
        try {
            $stmt = $this->conn->prepare("UPDATE login_user SET intents = 0, date_start = null, date_end = null  WHERE user_id = (SELECT id FROM users WHERE email = '". $user ."');");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
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

/*
 * Falta por probar el unlock account
 */
//$l = new Login();
// Desbloquea la cuenta
//$l->unlockAccount("root");
//echo $l->setIntentLogin(1);
// Logueado
//print_r( $l->apiLogin("rot", "123") );
// Logueado con errores
//echo $l->getLoginErrors("rot", "tor");