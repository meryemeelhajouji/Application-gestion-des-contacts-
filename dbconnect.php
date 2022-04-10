<?php
 class Dbconnect{
  private $host ="localhost";
  private $username = "root";
  private $password = "";
  private $database = "gestion_contacts";




  public  function connect(){
      try {
        $conn = new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);
       return $conn;
        echo"database connect";

    } catch (PDOException $error) {
        $error->getMessage();
        echo"database faild to connect";    
    }
  }
    

 }

//$conn=new Dbconnect();
//$conn->connect();
?> 