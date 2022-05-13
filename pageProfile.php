<?php
session_start();
if(!isset($_SESSION['name'])){
  header("location: login.php");
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
  <body style="background-color:#00000010;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand fs-3" href="index.php">Contacts list</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              </ul>
              <span class="navbar-text">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active fs-5" aria-current="page" href="pageProfile.php"><?php echo $_SESSION['name']; ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="listContacts.php">Contacts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" href="logout.php">Logout</a>
                </li>
              </ul>
              </span>
            </div>
          </div>
        </nav>
        <div class="d-flex "  style="height: 650px;">
         <div class=" w-50 h-100  d-flex justify-content-center  " style="  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); border-radius:  0% 0% 80% 0%;  ">
                   <div><img src="/img/Profile pic-amico.png" class="w-100 h-75 "></div>
         </div>
         <div  class=" h-100 w-50 m-5  "> 
                   <div  class="  p-2 m-5 card shadow  bg-body rounded  ">
              <h1 class="fs-2 my-5 text-center "> Welcome, <?php echo $_SESSION['name']; ?>!</h1>
              <h3 class=" my-2 fs-5"> Your  profile:</h3>

              <table class="table mb-5">
                  <thead>
                    <tr>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th ></th>
                      <td></td>
                      <td></td>
                    
                    </tr>
                    <tr>
                      <td class="fs-5 fw-bold ">Username:</td>
                      <td class="text-center"> <?php echo $_SESSION['name'] ;?></td>
                    </tr>
                    <tr>
                      <td class="fs-5 fw-bold">Signup date:</td>
                      <td class="text-center"> <?php echo $_SESSION['date']; ?></td>
                    </tr>
                    <tr>
                      <td class="fs-5 fw-bold">Last login:</td>
                      <td class="text-center"><?php echo  $_SESSION['lastLogin']; ?></td>
                    </tr>
                  
                  </tbody>
              </table>

</div>
         </div>
</div>  

  </body>
         
     


</html>

