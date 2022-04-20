<?php
 class Dbconnect{

     private $host ="localhost";
     private $username = "root";
     private $password = "";
     private $database = "gestion_contacts";
   
    public function connexion(){
        $con= new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);      
        return $con;
    }

    public function GetData($req){
        $sql=$this->connexion()->prepare($req);
         return $sql; 
    }
   
    
}
//$conn=new Dbconnect();
//$conn->connection();
?> 