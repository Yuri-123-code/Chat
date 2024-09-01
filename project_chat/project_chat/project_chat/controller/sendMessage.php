<?php

require_once 'connect/connect.php';
require_once 'id_select.php';

class message extends connect {

    public function sendMessage()
    {

        if(isset($_GET['id_receptor'])){

            $_SESSION['id_receptor'] = (int) $_GET['id_receptor'];
           
        }
        

        if (isset($_POST['send'])) {
            
            function inputValidateString($str)
            {
                return filter_input(INPUT_POST,"$str",FILTER_SANITIZE_SPECIAL_CHARS);
            }
            
            $id_user = $_SESSION['id_user'];
            $id_receptor = $_SESSION['id_receptor'];
            $message = inputValidateString('message');

            $statement = $this->getPDO()->prepare('INSERT INTO tbl_message(message) VALUES (:message)');
            $statement->execute(['message' => $message]);

            if ($statement->rowCount() > 0) {
                $id_msssage = $this->getPDO()->lastInsertId();
    
                // Insere a associação entre o usuário e a mensagem na tabela user_messages
                $statement = $this->getPDO()->prepare("INSERT INTO tbl_user_message (id_user,id_message,id_receptor) VALUES (:id_user, :id_message, :id_receptor)");
                $statement->execute(['id_user' => $id_user,'id_message' => $id_msssage,'id_receptor' => $id_receptor]);

                
            if ($statement->rowCount() > 0) {

                print  "<script>alert('Mensagem enviada com sucesso!')</script>";

                header('location:message.php');

            } else {
                
                print  "<script>alert('erro em enviar mensagen!')</script>";

            }

        }

        
     }

    }

    public function selectMessage()
    {

        $user_1 =  $_SESSION['id_user'];
        $user_2 =  $_SESSION['id_receptor'];

        $statement = $this->getPDO()->prepare("SELECT u.name, m.message, m.create_at FROM tbl_user u JOIN tbl_user_message um ON u.id_user = um.id_user JOIN tbl_message m ON um.id_message = m.id_message WHERE (um.id_user = :user_1 AND um.id_receptor = :user_2) OR (um.id_user = :user_2 AND um.id_receptor = :user_1) ORDER BY m.create_at ASC");
        $statement->execute(['user_1' => $user_1, 'user_2' => $user_2]);
        $GLOBALS['rows'] = $statement->fetchAll();

        return $GLOBALS['rows'];$GLOBALS['rows'] = $statement->fetchAll();

        return $GLOBALS['rows'];


    }

}