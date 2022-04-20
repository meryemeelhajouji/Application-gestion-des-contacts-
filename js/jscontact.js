function validationContact(){
    var name = document.getElementById('nom').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let adress = document.getElementById('adress').value;
    const mailformat = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*$/

    const ajexphone =/^\+?(0|(212))[657]\d{8}$/
    if ( name == ""){
   
     document.getElementById('nameid').innerHTML=" ** Please fill the UserName field";
     document.getElementById('nameid').style.color="red";
     return false;
    } else if ((name.length <=2) || (name.length >= 20) ){
     document.getElementById('nameid').innerHTML =" ** user name should be between 2 to 20 characters ";
     document.getElementById('nameid').style.color="red";
     
     return false;
    }else{
     document.getElementById('nameid').innerHTML=" ** Validé";
     document.getElementById('nameid').style.color="#0dca4c";
   
    }
   
    
    

    if (email == "") {
     document.getElementById('emailid').innerHTML = " ** Enter Email ID"
     document.getElementById('emailid').style.color="red";
     return false;
    
   }else if (!email.match(mailformat)) {
     document.getElementById('emailid').innerHTML = " **Format  Invalid"
       document.getElementById('emailid').style.color="red";
     return false;
   }else{
     document.getElementById('emailid').innerHTML=" ** Validé";
     document.getElementById('emailid').style.color="#0dca4c";
   }
   
   
    

   if (adress == "") {
    document.getElementById('adressId').innerHTML=" ** Please fill Enroll Number  field";
    document.getElementById('adressId').style.color="red";
    return false;
  }else{
    document.getElementById('adressId').innerHTML=" ** Validé";
    document.getElementById('adressId').style.color="#0dca4c";
  }
   

 
   
 
   
   
   
   
   
   
   
   }