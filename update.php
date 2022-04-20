<?php 
include('classe/contact.php');
$con = new contact();
$con->id_contact=$_GET['idUpdate'];


$rows=$con->SelectById();
if(isset($_POST['update'])){
    $con->nom=$_POST['nom'];
    $con->telephone=$_POST['phone'];
    $con->email=$_POST['email'];
    $con->adress=$_POST['adres'];
    if($con->update()==true)  header("Location: listContacts.php");

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>list contact</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>        
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
        <li class="nav-item fs-5">
          <a class="nav-link active" aria-current="page" href="pageProfile.php"><?php echo $_SESSION['name'] ?></a>
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
        <main>
            <div class="d-flex justify-content-center align-items-center w-100" >
              <div class="rounded-3 w-50 card shadow p-3 mb-5 bg-body rounded p-5 m-5 " >
                 <div class="text-center mb-3"><h1>Contacts</h1></div>
                <div class="list">
                   
                    <h3>Update contact</h3>              
                  </div>

                <form action="" method="POST" onsubmit="return validation()">  
                  <div class="mb-3 ">
                  <label for="exampleFormControlInput1" class="form-label">Name</label>
                  <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter name" value="<?php echo $rows['nom']; ?>" />
                  <p id="img" style="margin-bottom: -1rem; width: 10px;"></p>
                  <span id="nomid" style="color:red; font-weight: bold;"></span>
                </div>

                    <div class="mb-3 ">
                      <label for="exampleFormControlInput1" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="<?php echo $rows['tele']; ?>" >
                      <p id="img2" style="margin-bottom: -1rem;"></p>
                      <span id="phoneid"style="color:red; font-weight: bold;"></span>
                    </div>
               
                    <div class="mb-3"  >
                      <label for="exampleFormControlInput1" class="form-label">Email address</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"  value="<?php echo $rows['email']; ?>" >
                      <p id="img3" style="margin-bottom: -1rem;"></p>
                      <span id="mailid" style="color:red; font-weight: bold;"></span>
                    </div>
                    
                  <div class="mb-3"  >
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <span id="addressid"  class="text-danger"></span>
                    <input type="text" class="form-control" id="adress" name="adres" rows="3"  value="<?php echo $rows['adress']; ?>" >
                    <p id="img4" style="margin-bottom: -1rem;"></p>
                      <span id="addid" style="color:red; font-weight: bold;"></span>
                  </div>
                 
                  <div class="col-auto  mt-5">
                   <button type="submit" name="update" class="btn btn-primary mb-3">Save</button>
                  </div>

              </div>
                </form>         
                     
            </div>
        </main>
        <script src="js/validation.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
    </body>
</html>