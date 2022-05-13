<?php
include('classe/contact.php');

$con = new contact();

if (isset($_POST['save'])) {

  $con->nom = $_POST['nom'];
  $con->telephone = $_POST['phone'];
  $con->email = $_POST['email'];
  $con->adress = $_POST['adres'];
  $con->id = $_SESSION['id'];

  if ($con->Add() == true) {
    header("Location: listContacts.php");
  } else {
    $error = "error";
  }
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>list contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body style="height: 750px; background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%); ">

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
              <a class="nav-link active fs-5" aria-current="page" href="pageProfile.php"><?php echo $_SESSION['name'] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="listContacts.php"> Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="logout.php">Logout</a>
            </li>
          </ul>
        </span>
      </div>
    </div>
  </nav>
  <div class="d-flex justify-content-center align-items-center ">
    <div class="rounded-3 w-25 card shadow p-3 bg-body rounded p-3 m-3 ">
      <div class="text-center ">
        <h1> AddContacts</h1>
      </div>

      <span class="m-2">No contacts.</span>
     


      <form action="" method="POST" onsubmit="return validationContact()">
        <div class="mb-3 ">
          <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name">
          <span id="nameid" style="color:red; font-weight: bold;"></span>
        </div>

        <div class="mb-3">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
          <span id="phoneid" style="color:red; font-weight: bold;"></span>
        </div>

        <div class="mb-3">
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
          <span id="emailid" style="color:red; font-weight: bold;"></span>
        </div>

        <div class="mb-3">
          <span id="addressid" class="text-danger"></span>
          <textarea class="form-control" id="adress" name="adres" rows="3"></textarea>
          <span id="adressId" style="color:red; font-weight: bold;"></span>
        </div>

        <div class=" mt-5">
        <button type="submit" name="save" class="btn  mb-3" style="  width: 350px; height: 50px;  background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);">Save</button>
        </div>

    </div>

    </form>

  </div>
  </main>
  <script src="js/jscontact.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>