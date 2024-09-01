<?php


// arquivo de connecao

abstract class  connect {

    private $pdo;

    public function getPDO()
    {
        return $this->pdo;
    }

    public function setPDO($_pdo)
    {
        $this->pdo = $_pdo;
    }

    public function __construct()
    {
        try {
            
            $host = 'localhost';
            $dbname = 'db_chat';
            $user = 'root';
            $password = '';

            $this->setPDO(new PDO("mysql:host=$host;dbname=$dbname",$user,$password));
            $this->getPDO()->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            

        } catch (\PDOException $th) {
            /* message error */ print $th->message();
        }
    }

}