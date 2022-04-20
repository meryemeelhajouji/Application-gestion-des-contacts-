<?php
include('classe/contact.php');
if(isset($_GET['idDelete'])){
$contact1=new contact();
$contact1->id_contact=$_GET['idDelete'];
if($contact1->delet()==true){
   

header("Location: listContacts.php");
    
   }else{
   echo"error";
   }
}

?>