<?php

session_start();

class id_select {


    public function id_user()
    {

        if(isset($_GET['id_user'])){

            $_SESSION['id_user'] = (int) $_GET['id_user'];
          
        }

    }

}