<?php
/**
* 
*/
class LoginApi {
	private $user;
	private $password;
	
	function __construct($user, $password) {
		//clear && php -S 0.0.0.0:8081
		//Api rest: clear && php -S 0.0.0.0:8080 -t public/ publiindex.php
		$this->password = $password;
		$this->user = $user;
		$this->ip_server = "http://0.0.0.0:8080/";
	}

	function getLogin() {
		$url = $this->ip_server . "login/user=" . $this->user . "&password=" . $this->password;
		
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
		$json = curl_exec($ch);

		if (!$json) {
			echo curl_error($ch);
		}
		curl_close($ch);

		return $json;
	}

    /**
     * Gets the value of user.
     *
     * @return mixed
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Sets the value of user.
     *
     * @param mixed $user the user
     *
     * @return self
     */
    private function _setUser($user) {
        $this->user = $user;

        return $this;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    private function _setPassword($password) {
        $this->password = $password;

        return $this;
    }
}

if (isset($_POST['btn-login'])) {
	if (!empty($_POST['ui_login_password']) || !empty($_POST['ui_login_username'])) {
		$password = htmlentities($_POST['ui_login_password']);
		$password = hash('sha256', $password);

		$user = htmlentities($_POST['ui_login_username']);
		$l = new LoginApi($user, $password);

		echo $l->getLogin();

	} else {
		if (empty($_POST['ui_login_password'])) {
			echo "Ingrese una contraseña";
		} elseif (empty($_POST['ui_login_username'])) {
			echo "Ingrese un usuario";
		} else {
			echo "Datos incorrectos";
		}
	}
}