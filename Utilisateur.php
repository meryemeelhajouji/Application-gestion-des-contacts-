<?php
session_start();
include'dbconnect.php';
class Utilisateur extends Dbconnect{
   public $username;
   public $password;
   public $date_inscription;


            public function getName()
            {
                return $this->nom;
            }
            public function getPassword()
            {
                return $this->password;
            }
            public function setNname($username)
            {
                $this->username=$username;
            }
            public function setPassword($password)
            {
                $this->password=$password;
            }
  

            public function signup(){
                $req ="insert into user (username, password, date_inscription) values (?,?,sysdate()) ";
                $result= $this->GetData($req);
                $result->execute([
                    $this->username,
                    $this->password,
                ]);
     
            }


            public function login(){
                $req ="select * from user where username =?";
                $result= $this->GetData($req);
                $result->execute([$this->username]);
                $res=$result->fetch(PDO::FETCH_ASSOC);
                if(password_verify($this->password,$res['password'])==true){
                        $_SESSION['name'] = $res['username'];
                        $_SESSION['date'] = $res['date_inscription'];
                        $_SESSION['id'] = $res['id'];
                        return $res;
                }
            }
            

            public function logOut(){
               
            }

               

}

?>