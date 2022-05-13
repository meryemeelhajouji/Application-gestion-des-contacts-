<?php

include'classe/Utilisateur.php';
if (isset($_POST['signup'])){
  
  $user = new Utilisateur();
  $username =$_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $user-> username=$username;
  $user-> password=$password;
  
  if($user->signup() ){
    header("Location: login.php");
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Sign up</title>
</head>
<body>


    


<div class="d-flex "  style="height: 750px;">
         <div class=" w-50 h-100  d-flex justify-content-center  " style="  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); border-radius:  0% 0% 80% 0%;  ">
                   <div><img src="/img/Hello-rafiki (1).png" class="w-100 h-75 "></div>
         </div>
         <div  class=" h-100 w-50 d-flex   justify-content-center flex-column align-items-center  "> 
                   <img src="/img/hello (1).png" style="width: 100px;" class="mb-3 " >
                   <div class="m-2"> 
                  <form method="post" action="" onsubmit="return validation()"> 
                                 <h1 class="text-center mt-1 fs-2">WELCOME BACK!</h1>
                                  <p class="text-center mt-1  fs-4">Please login to view your dashboard</p>
                                <div class="mb-3 ">
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" style=" padding: 11px ;width: 447px;" >
                                  <span id="nameid" style="color:red; font-weight: bold;"></span>
                                 </div>
                                 <div class="mb-3 ">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" style=" padding: 11px ;width: 447px;" >
                                    <span id="passwordid" style="color:red; font-weight: bold; "></span>
                                  </div>
                                  <div class="mb-3 ">
                                    <input type="password" class="form-control" id="passwordver" placeholder="Password verify" style=" padding: 11px ;width: 447px;" >
                                    <span id="Confirmpasswordid" style="color:red; font-weight: bold; "></span>
                                  </div>
                                        
                                <button type="submit" class="  border-0  mt-3 "  name ="signup" style="  width: 447px; height: 50px;  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);" >Sign up</button>
                                <div class="mt-3 mb-3 text-center">
                                    <span class="text-muted" >
                                  Already have an account?
                                    </span>
                                    <a style="color: #B8A0E9;" class=" text-decoration-underline" href="login.php"> <span >Login </span></a> 
                                    her
                                  </div>
            </form>
                
                  </div>
         </div>
</div>         
        


      <script src="js/login.js"></script>
</body>
</html>