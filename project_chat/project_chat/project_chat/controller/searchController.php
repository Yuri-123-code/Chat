<?php

require_once 'connect/connect.php';

session_start(); 
$_SESSION['search'] = true;


class search extends connect {
    
    public function search()
    {

        if(isset($_POST['send_s'])){

            function inputValidateString($str)
            {
                return filter_input(INPUT_POST,"$str",FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $search = inputValidateString('search');

       

            
            $statement = $this->getPDO()->prepare('SELECT * FROM tbl_user WHERE name = :search');
            $statement->execute(['search' => $search]);
            $GLOBALS['rows'] = $statement->fetchAll();

            return $GLOBALS['rows'];

            if ($GLOBALS['rows']->rowCount() > 0){

            
               
                header('location:searching.php');
         
    
            } else {
    
                $_SESSION['search'] = false;   
    
            } 


        }

    }

}