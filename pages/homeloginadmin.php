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
          <li><a href="homeloginadmin.php">Apartment List</a></li>
            <li><a href="addapart.php">Add Apartment</a></li>
            <li><a href="profileadmin.php">Profiles</a></li>
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
              $query="SELECT * FROM apartments";
              $result=mysqli_query($connect,$query);
              if(mysqli_num_rows($result)>0){
                foreach($result as $apartments){
       ?>
       
       <div class="rooms">
           <div class="room"> 
           <form action="../function/functions.php" method="POST" class="d-inline"> 
               <img class="img" src="../img/<?php echo $apartments["apartmentImage"];?>"/>
               <p class="apartmentName"><b>APARTMENT NAME: </b><?php echo $apartments["apartmentName"]; ?></p>
               <p class="apartmentPrice"><b>PRICE: ₱</b><?php echo $apartments["apartmentPrice"]; ?></p>
               <p class="fbPage"><b>FB ACCOUNT: </b><?php echo $apartments["fbPage"];  ?></p>
               <p class="contactNum"><b>CONTACT: </b><?php echo $apartments["contactNum"]; ?></p>
               
                
               
               <div class="seemore">
                <a href="desc.php?id=<?=$apartments['apartmentID'];?>"  ><b>See more details</b></a>
              </div>
              <a class="editbtn" href="editApartment.php?id=<?=$apartments['apartmentID'];?>" class="btn">Edit</a>
           
               <button type="submit" name="deleteApart" value="<?=$apartments['apartmentID']; ?>" class="delete">Delete</button>

            </div>
            </div>
            </form>
       <?php
          }
        }
     ?>
          
   </main>
  </body>
</html>
