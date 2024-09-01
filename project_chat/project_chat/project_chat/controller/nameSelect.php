<?php

require_once 'connect/connect.php';
require_once 'loginController.php';
session_start(); 

class name_Selest extends connect {

    public function selectName()
    { 
   
    $email = $_SESSION['email'];

    $statement = $this->getPDO()->prepare('SELECT name FROM tbl_user WHERE email = :email');
    $statement->execute(['email' => $email]);
    $GLOBALS['rows'] = $statement->fetchAll();

    }


}