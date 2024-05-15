<?php
require '../connection/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ApartNear</title>
    <link rel="stylesheet" href="homeloginadmin.css" />
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
      <div class="row">
        <div class="col">
          <h1>APARTMENT LIST</h1>
        </div>
      </div>
    </div>
    <main>
       <?php                       
               $result=mysqli_query($connect,"SELECT*FROM apartments");  
                
          while($row = mysqli_fetch_assoc($result)){
       ?>
       
       <div class="rooms">
           <div class="room">  
               <img class="img" src="../img/<?php echo $row["apartmentImage"]; ?>"/>
               <p class="apartmentName"><b>APARTMENT NAME: </b><?php echo $row["apartmentName"];  ?></p>
               <p class="apartmentPrice"><b>PRICE: ₱</b><?php echo $row["apartmentPrice"]; ?></p>
               <p class="fbPage"><b>FBPAGE: </b><?php echo $row["fbPage"];  ?></p>
               <p class="contactNum"><b>CONTACT: </b><?php echo $row["contactNum"]; ?></p>
               
               <div class="seemore">
                <a href="descc.php?id=<?=$row['apartmentID'];?>"><b>See more details</b></a>
              </div>
            </div>
            </div>
       <?php
          }
          
     ?>
          
   </main>
  </body>
</html>
