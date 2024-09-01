<?php


require_once 'connect/connect.php';

class peaple extends connect {


    public function peapleSelect()
    {

        $statement = $this->getPDO()->prepare('SELECT * FROM tbl_user ORDER BY id_user DESC');
        $statement->execute();
        $GLOBALS['rows'] = $statement->fetchAll();

        return $GLOBALS['rows'];

    }

}