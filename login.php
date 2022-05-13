<?php

include'classe/Utilisateur.php';
if(isset($_SESSION['name'])){
    header("location: pageProfile.php");
  }

$error = "";
if (isset($_POST['Login'])){
  $user = new Utilisateur();
    $user-> username=$_POST['username'];
    $user-> password=$_POST['password'];
    if($user->login()){
        header("Location: pageProfile.php");
    }else{
         $error = "incorect username or password ";  
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>


<div class="d-flex "  style="height: 750px;">
         <div class=" w-50 h-100  d-flex justify-content-center  " style="  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); border-radius:  0% 0% 80% 0%;  ">
                   <div><img src="/img/Hello-rafiki (1).png" class="w-100 h-75 "></div>
         </div>
         <div  class=" h-100 w-50 d-flex   justify-content-center flex-column align-items-center  "> 
                   <img src="/img/hello (1).png" style="width: 100px;" class="mb-3 " >
                  <div class="m-2"> 
                        <form method="POST" action="" onsubmit="return validation()">
                                        <h1 class="text-center mt-1 fs-2">WELCOME BACK!</h1>
                                        <p class="text-center mt-1  fs-4">Please login to view your dashboard</p>
                                        <?php if($error != ""){ ?>
                                                    <div class="alert alert-danger mt-3">
                                                        <?php echo $error; ?>
                                                    </div>
                                        <?php   $error = null;  } ?>
                                        <div class="mt-4" >
                                                <input type="text" name="username" id="username" placeholder="username" style=" padding: 11px ;width: 447px;" ><br>
                                                <span id="idemail" style="color:red; font-weight: bold;"></span>
                                        <div>

                                        <div  class="mt-3">
                                                <input type="password" name="password" id="password" placeholder="Password" style="  padding: 11px ;width: 447px;" ><br>
                                                <span id="pass" style="color:red; font-weight: bold; "></span>
                                        </div >

                                        <button type="submit" name="Login" value="" class="  border-0  mt-3 " style="  width: 447px; height: 50px;  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);" > Login</button>
                                        
                                        <div  class="text-center mt-2">No account? <a style="color: #B8A0E9;" href="signUp.php">Sign up</a> here.</div>
                        
                        </form>
                
                  </div>
         </div>
</div>         
         
  
     
      <script src="js/login1.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2X.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>