<?php

/**
 * Created by PhpStorm.
 * User: rk521
 * Date: 9/10/16
 * Time: 04:59 PM
 */

include 'connector.php';

class Restore
{
    private $password;
    private $password2;
    private $conn;

    /**
     * Restore constructor.
     */
    public function __construct()
    {
        try {
            $db = new Connector();
            $this->conn = $db->DBConnection();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function restore($pass, $pass2) {
        $this->setPassword($pass);
        $this->setPassword2($pass2);

        if ($this->getPassword() === $this->getPassword2()) {
            try {
                $stmt = $this->conn->prepare("UPDATE users SET password = :password WHERE id = 1 ;");
                $stmt->bindValue(":date1", $this->getPassword(), PDO::PARAM_STR );

                if ($stmt->execute()) {
                    return "ok";
                } else {
                    return "Ocurrio un error al actualizar";
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        } else {
            return "Las contraseñas no coinciden";
        }
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword2()
    {
        return $this->password2;
    }

    /**
     * @param mixed $password2
     */
    public function setPassword2($password2)
    {
        $this->password2 = $password2;
    }
}

if (isset($_POST['btn-login'])) {
    if (!empty($_POST['ui_login_password']) || !empty($_POST['ui_login_password_2'])) {
        $password = htmlentities($_POST['ui_login_password']);
        $password = hash('sha256', $password);

        $password2 = htmlentities($_POST['ui_login_password_2']);
        $password2 = hash('sha256', $password2);

        $l = new Restore();
        echo $l->restore($user, $password);

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