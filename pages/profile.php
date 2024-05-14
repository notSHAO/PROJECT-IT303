<?php
require '..\connection\dbconnect.php';
session_start();
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartnear</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="../animation.css">
    <link rel="icon" href="../img/logoweb.png" type="image/x-icon">
</head>
<body>
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
      <section>
      <div class="form">
      <div class="login">
        <?php
  $query=mysqli_query($connect,"SELECT*FROM userinfo WHERE email='$email'");
  while($row = mysqli_fetch_assoc($query)){
        ?>
              <h1>My Profile</h1>
              <div class="input">
                
               <p><b>Fullname: </b><?php echo $row['fullname'] ?></p>
                  
                </div>
                <div class="input">
                
                <p><b>Username: </b><?php echo $row['username'] ?><p></p>
                  
                </div>
              <div class="input">
              <p><b>Email: </b><?php echo $row['email'] ?></p>
              </div>
              <div class="input">
                
              <p><b>Password: </b><?php echo $row['userpass'] ?></p>
                
              </div>         
              <div class="forgotSign">
                <a href="changepass.php" class="forgot"
                  >Change Password</a>
              </div>
            </div>
      </div>
      </section>  
      <?php
  }
      ?>
</body>
</html>