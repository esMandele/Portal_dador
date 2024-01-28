<?php

Class ConnectToDB{

    private $hostname = "localhost";
    private $username = "root";
    private $pass = "";
    private $dbname = "portal_dador";


     function dbConnect(){
        
        try{
            $url = "mysql:host={$this->hostname}; dbname={$this->dbname}"; 
            $pdoConnect = new PDO($url, $this->username, $this->pass);
            $pdoConnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdoConnect;
            
        }catch(PDOException $error){
            echo "Database conection fault to server: <br> {$error->getMessage()}";

            return $pdoConnect = null;
        }

    }

}

$dbStart = new ConnectToDB();

?>