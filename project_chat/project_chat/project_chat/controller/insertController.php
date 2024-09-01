<?php


require_once 'connect/connect.php';
session_start(); 
$_SESSION['error'] = true;


class insert extends connect {


    public function store()
    {

        if(isset($_POST['create'])){

            function inputValidateString($str)
            {
                return filter_input(INPUT_POST,"$str",FILTER_SANITIZE_SPECIAL_CHARS);
            }

            function inputValidateEmail($eml)
            {
                return filter_input(INPUT_POST,"$eml",FILTER_SANITIZE_EMAIL);
            }

            function inputValidateNumber($num)
            {
                return filter_input(INPUT_POST,"$num",FILTER_SANITIZE_NUMBER_INT);
            }

            $name = inputValidateString('name');
            $email = inputValidateEmail('email');
            $genero = $_POST['genero'];
            $password  = inputValidateString('password');
            $password_conf = inputValidateString('password_conf');
            $phone_number = inputValidateNumber('phone_number');

            if($password != $password_conf){

                $_SESSION['error'] = false;

            } else {

                $password_encode = password_hash($password, 1);

                $statement = $this->getPDO()->prepare('INSERT INTO tbl_user (name,email,genero,password,phone_number) VALUES (:name,:email,:genero,:password,:phone_number)');
                $statement->execute(['name' => $name, 'email' => $email, 'genero' => $genero , 'password' => $password, 'phone_number' => $phone_number]);

                if ($statement->rowCount() > 1){

                    print "<script>alert('Está conta já existe!')</script>";
             
                } else {

                        header('location:../../index.php');

                }

            }
    

        }

    }

}