<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ApartNear</title>
    <link rel="stylesheet" href="signinpage.css" />
    <link rel="stylesheet" href="../animation.css">
    <link rel="icon" href="../img/logoweb.png" type="image/x-icon">
  </head>
  <body>
    <div class="banner">
      <div class="navBar">
        <a href="../index.php"><img src="../img/logo.png" class="logo" /></a>
      </div>
      <section>
        <div class="form">
        <form action="../function/functions.php" method="POST" class="bgform">
            <div class="login">
              <h1>Create an Account</h1>
              <div class="input">
                <input type="text" placeholder="Fullname" class="fullName" name="fullname"/>
              </div>
              <div class="input">
                <input type="text" placeholder="Username" class="userName" name="username"/>
              </div>
              <div class="input">
                <input type="email" placeholder="Email" class="email" name="email"/>
              </div>
              <div class="input">
                <input
                  type="password"
                  placeholder="Password"
                  class="password"
                  name="userpass"
                />
              </div>
              <div class="btn">
                <button type="submit" name="submitInfo" class="btnsignup">Sign Up</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </body>
</html>
