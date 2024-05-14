
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ApartNear</title>
    <link rel="stylesheet" href="loginpage.css" />
    <link rel="stylesheet" href="../animation.css">
    <link rel="icon" href="../img/logoweb.png" type="image/x-icon">
  </head>
  <body>
    <div class="banner">
      <div class="navBar">
        <a href="../index.php"><img src="../img/logo.png" class="logo" /></a>
      </div>
      <section>
        <form class="form" method="POST" action="../function/functions.php">
          
            <div class="login">
              <h1>Login</h1>
              <div class="input">
                <input type="email" placeholder="Email" class="email" name="email" required />
              </div>
              <div class="input">
                <input
                  type="password"
                  placeholder="Password"
                  class="password"
                  name="userpass"
                  required
                />
              </div>
              <div class="btn">
                <button type="submit" name="logInfo"  class="btnlogin">Login</button>
              </div>
              <div class="forgotSign">
                <a href="emailcon.php" class="forgot"
                  >Forgot password?</a>
                <a href="signinpage.php" class="sign"
                  >New? Sign up here</a>
              </div>
            </div>
          
        </form>
      </section>
    </div>
  </body>
</html>
