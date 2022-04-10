<?php
session_start();
include'Utilisateur.php';
if (isset($_POST['signup'])){
  
  $user = new Utilisateur();
  $username =$_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  if($user->signup($username, $password) == "valide"){
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
    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">Contacts list</a>
        <form class="form-inline">
          <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
        </form>
    </nav>

    <div  class="d-flex justify-content-center align-items-center h-100">
      <div class=" rounded-3 ">
            <div class="text-center m-3">
               <h2 > Sign up</h2>
            </div>
            <form method="post" action="" onsubmit="return validation()"> 
                <div class="mb-3 ">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" style=" padding: 11px ;width: 447px;" >
                  <p id="img" style="margin-bottom: -1rem;"></p>
                  <span id="idemail" style="color:red; font-weight: bold;"></span>
                </div>
                 <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" style=" padding: 11px ;width: 447px;" >
                    <p id="img2"  style="margin-bottom: -1rem;"></p>
                    <span id="pass" style="color:red; font-weight: bold; "></span>
                  </div>
                 <div class="mb-3 ">
                  <label for="exampleInputPassword1" class="form-label">Password verify</label>
                  <input type="password" class="form-control" id="passwordver" placeholder="Password verify" style=" padding: 11px ;width: 447px;" >
                  <p id="img22"  style="margin-bottom: -1rem;"></p>
                  <span id="pass2" style="color:red; font-weight: bold; "></span>
                </div>
       
                 <button type="submit" class="btn btn-primary mt-5"  name ="signup" style=" width: 447px;">Sign up</button>
                 <div class="mt-3 mb-3 text-center">
                    <span class="text-muted">
                   Already have an account?
                    </span>
                     <a class="text-primary text-decoration-underline" href="login.php"> <span >Login </span></a> 
                     her
                  </div>
            </form>
         
      </div>  
    </div>

      <script src="js/login.js"></script>
</body>
</html>