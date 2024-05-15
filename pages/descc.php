<?php
require '../connection/dbconnect.php';
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
    <link rel="stylesheet" href="desc.css">
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
          <li><a href="homeloginpage.php">Apartment List</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="loginpage.php">Logout</a></li>
          </ul>
        </nav>
      </div>
      <div>
      -
    <section >
        <form class="bgform">
            <div class="login">
              <h1>Other Details</h1>
              <div>
                <b style="color: white;">Apartment Location: </b>
              </div>
              <div>
              <textarea readonly
              rows="2" cols="50" class="freeform" name="freeform" ><?= $apartments['apartmentLoc'];?></textarea>
              </div>
              <div>
                <b style="color: white;">Descriptions:</b>
              </div>
              <div>
              <textarea readonly
              rows="10" cols="50" class="freeform" name="freeform" ><?= $apartments['apartmentDesc'];?></textarea>
              </div>
              <div>
                <a href="#img"><b style="color: white;">More Images Below</b></a>
              </div>
             
            </div>
            
        </form>
        
    </section>
    <section class="images">
      <div class="bgformimg">
      <div id="img">
             <img class="img" src="../img/<?php echo $apartments["apartmentImage1"];?>"/>
             </div>
             <div>
              <br>
             <img class="img" src="../img/<?php echo $apartments["apartmentImage2"];?>"/>
             </div>
             <br>
             <div>
             <img class="img" src="../img/<?php echo $apartments["apartmentImage3"];?>"/>
             </div>
      </div>
      </div>
    
    </section>
    
      <?php
}
}


      ?>
</body>
</html>