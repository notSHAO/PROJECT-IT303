<?php
require '..\connection\dbconnect.php';

if (isset($_GET['id'])) {
  $iD = mysqli_real_escape_string($connect,$_GET['id']);
  $query = "SELECT * FROM userinfo WHERE userID='$iD'";
  $run_query = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ApartNear</title>
    <link rel="stylesheet" href="editUser.css" />
    <link rel="stylesheet" href="../animation.css">
    <link rel="icon" href="../img/logoweb.png" type="image/x-icon">
  </head>
  <body>
    <?php
    if(mysqli_num_rows($run_query)>0){

    $userinfo=mysqli_fetch_array($run_query);
    ?>
    <div class="banner">
      <div class="navBar">
        <a href="../index.php"><img src="../img/logo.png" class="logo" /></a>
      </div>
      <section>
        <div class="form">
        <form action="../function/functions.php" method="POST" class="bgform">
            <div class="login">
              <h1>Edit Account</h1>

              
              <p><b>User ID: </b><input type="text" placeholder="Fullname" class="userID" name="userID" value="<?= $userinfo['userID'];?>"/></p>
              <div class="input">
                <input type="text" placeholder="Fullname" class="fullName" name="fullname" value="<?=$userinfo['fullname'];?>"/>
              </div>
              <div class="input">
                <input type="text" placeholder="Username" class="userName" name="username" value="<?=$userinfo['username'];?>"/>
              </div>
              <div class="input">
                <input type="text" placeholder="Email" class="email" name="email" value="<?=$userinfo['email'];?>"/>
              </div>
              <div class="input">
                <input
                  type="password"
                  placeholder="Password"
                  class="password"
                  name="userpass"
                  value="<?=$userinfo['userpass'];?>"
                />
              </div>
              <div class="btn">
                <button type="submit" name="editAcc" class="btnsignup">Update </button>
              </div>
            </div>
          </form>
        </div>
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
