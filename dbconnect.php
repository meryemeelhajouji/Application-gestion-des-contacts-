<?php
 class Dbconnect{

     private $host ="localhost";
     private $username = "root";
     private $password = "";
     private $database = "gestion_contacts";
   

    public function connection()
    {
     try
      {
        $con= new PDO("mysql:host=$this->host; dbname=$this->database" ,$this->username ,$this->password);      
       return $con;
      }catch (Exception $ex) { echo $ex->getMessage();}
    }

    public function GetData($req){
     try
     {
        $sql=$this->connection()->prepare($req);
     
      return $sql; 
     }catch (Exception $ex) 
     {echo $ex->getMessage();}
    }
   
    
}
$conn=new Dbconnect();
$conn->connection();
?> 