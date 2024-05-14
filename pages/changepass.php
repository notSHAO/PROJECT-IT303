<?php
require '..\connection\dbconnect.php';
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ApartNear</title>
    <link rel="stylesheet" href="forgotpage.css" />
    <link rel="stylesheet" href="../animation.css">
    <link rel="icon" href="../img/logoweb.png" type="image/x-icon">
  </head>
  <body>
  <?php
  $query=mysqli_query($connect,"SELECT*FROM userinfo WHERE email='$email'");
  while($row = mysqli_fetch_assoc($query)){
        ?>
    <div class="banner">
      <div class="navBar">
        <a href="../index.php"><img src="../img/logo.png" class="logo" /></a>
      </div>
      <section>
        <div class="form">
          <form action="../function/functions.php" method="POST">
            <div class="login">
              <h1>Change Password</h1> 
              <div class="input">
                <input type="text" readonly value="<?=$row['email'];?>" name="email" class="email" />
              </div>
              <div class="input">
                <input type="password" placeholder="Enter New Password" name="newpass" class="email" />
              </div>
              <div class="btn">
                <button type="submit" name="changePass" class="btnlogin">Change</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
    <?php
  }
      ?>
  </body>
</html>
