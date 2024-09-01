<?php


require_once 'connect/connect.php';
require_once 'loginController.php';



class selectperfil extends connect {


    public function select()    // select perfil 
    {

        $email = $_SESSION['email'];
       
       
        $statement = $this->getPDO()->prepare('SELECT id_user,name FROM tbl_user WHERE email = :email');
        $statement->execute(['email' => $email]);
        $GLOBALS['rows'] = $statement->fetchAll();
    
    
        return $GLOBALS['rows'];
        

    }

 
} 