<?php

require_once 'connect/connect.php';

session_start(); 
$_SESSION['error'] = true;

/* sistema de  login  */


class userLogin extends connect {

  
    public function login()
    {

        if(isset($_POST['login'])){


            function inputValidateEmail($eml)
            {
                return filter_input(INPUT_POST,"$eml",FILTER_SANITIZE_EMAIL);
            }
    
            function inputValidateString($str)
            {
                return filter_input(INPUT_POST,"$str",FILTER_SANITIZE_SPECIAL_CHARS);
            }
    
    
            $email = inputValidateEmail('email');
            $password  = inputValidateString('password');
    
            $password_encode = password_hash($password, 1);
    
            $statement = $this->getPDO()->prepare('SELECT email,password FROM tbl_user WHERE  email = :email AND password  = :password');
            $statement->execute(['email' => $email, 'password' => $password]);
    
    
            if ($statement->rowCount() > 0){
    
                $_SESSION['email'] = $email;
                $_SESSION['logado'] = true;
    
                header('location:home.php');
    
    
            } else {
    
                $_SESSION['error'] = false;
                
    
            } 
        }
    

    }



}