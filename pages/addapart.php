
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apartnear</title>
    <link rel="stylesheet" href="addapart.css">
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
      <div>
      -
    <section >
        <form action="../function/functions.php" method="POST" enctype="multipart/form-data" class="bgform" >
            
            <div class="login">
              <h1>Add Apartment</h1>
              <div class="input">
              <b style="color: white;">Apartment Name: </b>
              <br>
                <input type="text" class="fullName" name="apartmentName" placeholder="Apartment Name" required/>
              </div>
              <div class="input">
              <b style="color: white;">Apartment Price: </b>
              <br>
                <input type="text" class="userName" name="apartmentPrice" placeholder="Apartment Price" required/>
              </div>
              <div class="input">
              <b style="color: white;">FB Account: </b>
              <br>
                <input type="text" placeholder="FB Account" class="email" name="fbPage"/>
              </div>
              <div class="input">
              <b style="color: white;">Contact: </b>
              <br>
                <input
                  type="text"
                  placeholder="Contact Number"
                  class="password"
                  name="contactNum"
                  required
                />
              </div>
              <div class="input">
              <b style="color: white;">Location: </b>
              <br>
                <input type="text" class="userName" name="apartmentLoc" placeholder="Apartment Location" required/>
              </div>
              <div class="input">
              <b style="color: white;">Description: </b>
              <br>
                <input type="text" placeholder="Other Descriptions" class="email" name="apartmentDesc"/>
              </div>
              <b style="color: white;">Display Image: </b>
              <div>
                <br>
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
              <div class="btn">
              <input type="submit" value="Upload" name="submitadd" class="btnsignup">
              </div>
              
            </div>
        </form>
    </section>
      </div>
</body>
</html>