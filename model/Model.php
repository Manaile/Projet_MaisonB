<?php

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

require './database/Database.php';

class Model extends Database{
    public function __construct(){
        parent::__construct();
    }
    public function review(){

        $query=
        '
        SELECT (name,
            description)
        FROM reviews
        ';

        $gets= $this->pdo->prepare($query);
        $gets->execute();
        $reviews= $gets->fetchAll(PDO::FETCH_ASSOC);
        return $reviews;
    }
   
}

?>