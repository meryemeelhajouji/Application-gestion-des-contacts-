<?php 
include('contact.php');

  
  $con = new contact();
  $con->SetId($_SESSION['id']);

  $res=$con->Select();

 


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>list </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- <link rel="stylesheet" href=".css"> -->
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">Contacts list</a>
        <a class=" my-2 my-sm-0 nav-link text-light" href="listContacts.php">List Contacts</a>
            <a class=" my-2 my-sm-0 nav-link text-light" href="#">Login</a>
      </nav>
       
        <div class="container  " >
            <div class="table-responsiven  mt-5 ">
              <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
       <a href="ajouterConact.php" > Ajouter contact</a>
</button>
</div>



              </div>
                <table class="table align-middle">
                  <thead>
                    <tr>
                      <th>Contact list:</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php foreach($res as $rows){?>
                    <td><?= $rows['nom']; ?></td>
                     <th><?= $rows['email']; ?></th>
                     <td><?= $rows['tele']; ?></td>
                     <td><?= $rows['adress']; ?></td>
                     <td> <button class="btn btn-light"><a href="">Edit</a></button>
                        <button class="btn btn-light" ><a href="">Delete</a></button></td>
                    </tr>
                    <?php } ;?>
                   
                   
                  </tbody>
                </table>
              </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  
    </body>
</html>