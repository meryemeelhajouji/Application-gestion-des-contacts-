<?php
session_start();
if(!isset($_SESSION['name'])){
  header("location: index.php");
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
       
            <a class=" my-2 my-sm-0 nav-link text-light" href="listContacts.php">List Contacts</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
    
       
      </nav>
      <di class="d-flex justify-content-center align-items-center">
           <div  class=" m-5  w-100">
            <h1 class="my-5"> Welcome, <?php echo $_SESSION['name'] ?>!</h1>
            <h3 class=" my-5"> Your  profile:</h3>
    
            <table class="table">
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
                    <td class="fs-5 fw-bold ">Username;</td>
                    <td> <?php echo $_SESSION['name'] ?></td>
                  </tr>
                  <tr>
                    <td class="fs-5 fw-bold">Signup date:</td>
                    <td> <?php echo $_SESSION['date'] ?></td>
                  </tr>
                  <tr>
                    <td class="fs-5 fw-bold">Last login:</td>
                    <td>Mon, 08apr 2019 14:24:20 +0000</td>
                  </tr>
                 
                </tbody>
              </table>
        </div>
      </di>
       
           
     
</body>
</html>