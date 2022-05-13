<?php 
include('classe/contact.php');

  
  $con = new contact();
  $con->id=$_SESSION['id'];

  $res=$con->Select();
 
 


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>list </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <!-- <link rel="stylesheet" href=".css"> -->
    </head>
    <body  style="height: 750px; background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); " >

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand  fs-3" href="index.php">Contacts list</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
      </ul>
      <span class="navbar-text">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-5" aria-current="page" href="pageProfile.php"><?php echo $_SESSION['name'] ?></a>
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
        <div class="container  mt-5 bg-white  p-5" >
           <a href="ajouterConact.php" class=" d-flex justify-content-end text text-decoration-none"> <button  style="border-style: none; height: 50px; width: 200px;  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);"  > Ajouter contact</button></a>
            
           <div class="table-responsiven mt-3" >
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th>Contact list:</th>
                  
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach($res as $rows){?>
                    <td><?php echo $rows['nom']; ?></td>
                     <th><?php echo $rows['email']; ?></th>
                     <td><?php echo $rows['tele']; ?></td>
                     <td><?php echo $rows['adress']; ?></td>
                     <td> <button class="btn btn-light"><a href="update.php?idUpdate=<?php echo $rows['id_contact'];?>">Edit</a></button>
                        <button class="btn btn-light" ><a href="delete.php?idDelete=<?php echo $rows['id_contact'];?>">Delete</a></button></td>
                    </tr>
                    <?php } ;?>
                   
                   
                  </tbody>
                </table>
              </div>
        </div>
    
    </body>
</html>