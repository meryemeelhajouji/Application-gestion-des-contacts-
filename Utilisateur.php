<?php
include'dbconnect.php';
class Utilisateur extends Dbconnect{

  

    public function login($username, $password ){
           $db= $this->connect();
            $req ="select * from user where username =:username and password =:password";
            $exc =$db->prepare($req);
              $exc->execute([
                  ":username" => $username,
                  ":password" => $password
             ] );
            $res=$exc->fetch(PDO::FETCH_ASSOC);
           
       return $res;

    }
    public function signup(){

    }

    public function logOut(){

    }

    
}





?>