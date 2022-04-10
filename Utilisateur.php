<?php
include'dbconnect.php';
class Utilisateur extends Dbconnect{

  
    public function signup($username, $password ){
        $db= $this->connect();
        $req ="insert into user (username, password) values (:username, :password) ";
        $exc =$db->prepare($req);  
        $exc->execute([
            ":username" => $username,
            ":password" => $password
       ] ); 
       return "valide";
    }

    public function logOut(){

    }


    public function login($username, $password ){
        $db= $this->connect();
         $req ="select * from user where username =:username ";
         $exc =$db->prepare($req);
         
           $exc->execute([
               ":username" => $username
          ] );
         $res=$exc->fetch(PDO::FETCH_ASSOC);
         if(password_verify($password,$res['password'])==true){
            $_SESSION['username'] = $res['username'];
                 return $res;
         }
        
    

 }
    
}





?>