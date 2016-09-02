<?php
class Validations {
	function checkEmail($email) {
		$retVal = ( (!empty($email)) && (filter_var($email, FILTER_VALIDATE_EMAIL)) ) ? true : false ;
		return $retVal;
	}

	function checkPassword($password) {
		$res = [];
		if ( !empty($password) && preg_match("/^[ña-zÑA-Z0-9]+$/", $password ) ) {
			$retVal = true;
		} else {
			$retVal = "El password solo puede contener numeros y caracteres";
		}

		if ($retVal === true) {
			$retVal = ($this->checkLongitude($password, 6)) ? true : "El password debe ser mayor o igual a 6 caracteres";
		}

		if ($retVal === true) {
			$retVal = ($this->checkNumbers($password)) ? true : "El password debe contener almenos un numero";
		}

		if ($retVal === true) {
			$res = array('res' => 1);
		} else {
			$res = array('res' => 0, 'msg' => $retVal);
		}

		return $res;
	}

	function checkLongitude($string, $size) {
		$retVal = (strlen($string) >= $size) ? true : false ;
		return $retVal;
	}

	function checkNumbers($string) {
		$contador = 0;
		for ($i = 0; $i < strlen($string); $i++) { 
			if ( is_numeric($string[$i]) ) {
				$contador++;
			}
		}
		$retVal = ($contador > 0) ? true : false ;
		return $retVal;
	}
}

/*
$v = new Validations();
$res = $v->checkPassword("holaa1a");
if ($res["res"] == 0) {
	echo $res["msg"];
}
*/