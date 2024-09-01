<?php


require_once 'connect/connect.php';
require_once 'loginController.php';

class meSelect extends connect {

    public function showPerfil()
    {

        $email = $_SESSION['email'];

        $statement = $this->getPDO()->prepare('SELECT * FROM tbl_user WHERE email = :email');
        $statement->execute(['email' => $email ]);
        $GLOBALS['rows'] = $statement->fetchAll();

        return $GLOBALS['rows'];

    }

}