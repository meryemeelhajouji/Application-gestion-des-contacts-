<?php
session_start();
include('dbconnect.php');

class contact extends Dbconnect{
    public $nom;
    public $telephone;
    public $email;
    public $adress;
    public $id;

    public function Select(){
        $req="select * from contacts where id =?";
        $result= $this->GetData($req);
      
          $result->execute([$this->id ]);
       
       return $result->fetchAll();
     
    }
  
    public function Add(){
        $req ="insert into contacts(nom, tele,email,adress,id) values (?,?,?,?,?) ";
        $exc =$this->GetData($req);
        $exc->execute([
             $this->nom,
            $this->telephone,
             $this->email,
             $this->adress,
             $this->id
            ] );
     
    }
    public function delet(){
        $req ="DELETE FROM contact swhere id =?";
        $exc =$this->GetData($req);
        $exc->execute([$this->id]);
    }
    public function GetName()
    {
        return $this->nom;
    }
     public function SetName($nom)
    {
        $this->nom=$nom;
    }
     public function GetTelephone()
    {
        return $this->telephone;
    }
     public function SetTelephone($telephone)
    {
        $this->telephone=$telephone;
    }
     public function GetEmail()
    {
        return $this->email;
    }
     public function SetEmai($email)
    {
        $this->email=$email;
    }
    public function GetAdress()
    {
        return $this->adress;
    }
     public function SetAdress($adress)
    {
       $this->adress=$adress;
    }
    public function GetId()
    {
        return $this->adress;
    }
     public function SetId($id)
    {
       $this->id=$id;
    }




    }
  
// $user = new contact();

// $user->select(1);

?>