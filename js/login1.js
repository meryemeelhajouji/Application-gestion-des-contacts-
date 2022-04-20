var username=document.getElementById('username');
var idemail =document.getElementById('idemail')
var pass =document.getElementById('pass')
var pass2 =document.getElementById('pass2')

function validation(){
    if(username.value==""  ){
    
        idemail.innerHTML='** Please fill the UserName field'
        return false
    }else if(username.value!=""){

        idemail.innerHTML="";

    }
    if(!validateUsername(username.value)){
   idemail.innerHTML="The username should contain only numbers and letters";
        return false
    }
   


    if(password.value=="" ){
       pass.innerHTML="fill the password Please!";
        return false
    }else if(password.value!=""){
       img2.innerHTML='<img src="img/checked.png" style="POSITION: relative;top:-49px;right:-395px;width: 39px;">';
        pass.innerHTML="";


    }
    if(validatePassword(password.value)){
      pass.innerHTML="The password should contain only numbers and letters";
        return false
    }
    if(password.value.length<7){
       pass.innerHTML="The password must be at least 6 characters";
        return false
    
    }
   
  

    else return true
}


function validateUsername(username) 
    {
        var re = /^[a-zA-Z]{3,20}$/;
        return re.test(username);
    }
    function validatePassword(password) 
    {
        var re = /\"|\#|\'|\*|\?|\!|\-/;
        return re.test(password);
    }
    function validatePassword(passwordver) 
    {
        var re = /\"|\#|\'|\*|\?|\!|\-/;
        return re.test(passwordver);
    }