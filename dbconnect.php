<?php
 class Dbconnect{

     private $host ="localhost";
     private $username = "root";
     private $password = "";
     private $database = "gestion_contacts";
   
    public function connection(){
     
        $con= new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);      
        return $con;
    }

    public function GetData($req){
     
        $sql=$this->connection()->prepare($req);
         return $sql; 
    }
   
    
}
$conn=new Dbconnect();
$conn->connection();
?> 