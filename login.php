<?php
session_start();
include'Utilisateur.php';
$error = "";
if (isset($_POST['Login'])){
  
  $user = new Utilisateur();

   if($user->login($_POST['username'], $_POST['password'])){
   
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
<?php include 'navlogin.php'?>
<div  class="d-flex justify-content-center align-items-center h-100">
      <div class=" rounded-3 ">
      <form method="POST" action="" onsubmit="return validation()">
         
          <h3 class="text-center mt-5">Authenticate</h3>
          <?php if($error != ""){ ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo $error; ?>
                    </div>
                <?php   $error = null;  } ?>
          <div class="mt-4" >
            <input type="text" name="username" id="username" placeholder="username" style=" padding: 11px ;width: 447px;" >
            
            <p id="img" style="margin-bottom: -1rem;"></p>
            <span id="idemail" style="color:red; font-weight: bold;"></span>
          <div>

          <div  class="mt-5">
            <input type="password" name="password" id="password" placeholder="Password" style="  padding: 11px ;width: 447px;" >
            <p id="img2"  style="margin-bottom: -1rem;"></p>
            <span id="pass" style="color:red; font-weight: bold; "></span>

        </div >
        <button type="submit" name="Login" value="" class="   btn-primary mt-5 " style=" width: 447px;" > Login</button>
        <div>No account? <a href="signUp.php">Sign up</a> here.</div>
      </form>
      </div>
      </div>
      <script src="js/login.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2X.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>