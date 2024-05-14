<?php
require '..\connection\dbconnect.php';
if (isset($_GET['id'])) {
  $aD = mysqli_real_escape_string($connect,$_GET['id']);
  $query = "SELECT * FROM apartments WHERE apartmentID='$aD'";
  $run_query = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartnear</title>
    <link rel="stylesheet" href="editApartment.css">
    <link rel="stylesheet" href="../animation.css">
    <link rel="icon" href="../img/logoweb.png" type="image/x-icon">
</head>
<body>
  <?php
if(mysqli_num_rows($run_query)>0){

$apartments=mysqli_fetch_array($run_query);
?>
<div class="container">
      <div class="navBar">
        <a href="../index.php"
          ><img src="../img/logo.png" alt="" class="logo"
        /></a>
        <nav>
          <ul>
          <li><a href="homeloginadmin.php">Apartment List</a></li>
            <li><a href="addapart.php">Add Apartment</a></li>
            <li><a href="profileadmin.php">Profiles</a></li>
            <li><a href="loginpage.php">Logout</a></li>
          </ul>
        </nav>
      </div>
      <div>
      -
    <section >
        <form action="../function/functions.php" method="POST"  enctype="multipart/form-data" class="bgform">
        
            
            <div class="login">
              <h1>Edit Apartment</h1>
              <p><b style="color: white;">Apartment ID: </b><input type="text" class="idd" name="apartmentID" readonly value="<?= $apartments['apartmentID'];?>"></p>
              
              <div class="input">
              <b style="color: white;">Apartment Name: </b>
              <br>
                <input type="text" class="fullName" name="apartmentName" placeholder="Apartment Name" value="<?= $apartments['apartmentName'];?>"required/>
              </div>
              <div class="input">
              <b style="color: white;">Apartment Price: </b>
              <br>
                <input type="text" class="userName" name="apartmentPrice" placeholder="Apartment Price" value="<?= $apartments['apartmentPrice'];?>" required/>
              </div>
              <div class="input">
              <b style="color: white;">FB Account: </b>
              <br>
                <input type="text" placeholder="FB Account" class="email" name="fbPage" value="<?= $apartments['fbPage'];?>"/>
              </div>
              <div class="input">
              <b style="color: white;">Contact: </b>
              <br>
                <input
                  type="text"
                  placeholder="Contact Number"
                  class="password"
                  name="contactNum"
                  value="<?= $apartments['contactNum'];?>"
                  required
                />
              </div>
              <div class="input">
              <b style="color: white;">Location: </b>
              <br>
                <input type="text" class="userName" name="apartmentLoc" placeholder="Apartment Location" value="<?= $apartments['apartmentLoc'];?>"required/>
              </div>
              <div class="input">
              <b style="color: white;">Description: </b>
              <br>
                <input type="text" placeholder="Other Descriptions" class="email" name="apartmentDesc" value="<?= $apartments['apartmentDesc'];?>"/>
              </div>
              <b style="color: white;">Apartment Image: </b>
              <div>
                <br>
              <div >
              <input type="file" name="apartmentImage" id="apartmentImage" class="file" required>
              </div>
              <br>
              <b style="color: white;">Other Images: </b>
              <div>
                <br>
              <input type="file" name="apartmentImage1" id="apartmentImage" class="file" required>
              </div>
              <br>
              <div>
              <input type="file" name="apartmentImage2" id="apartmentImage" class="file" required>
              </div>
              <br>
              <div>
              <input type="file" name="apartmentImage3" id="apartmentImage" class="file" required>
              </div>
              </div>
              <div class="btn">
              <input type="submit" value="Edit" name="editApart" class="btnsignup">
              </div>
            </div>
        </form>
    </section>
      </div>
      <?php
}
else{
  echo"<h1>Invalid ID</h1>";
}
}
      ?>
</body>
</html>