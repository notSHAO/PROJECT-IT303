
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
    <div class="banner">
      <div class="navBar">
        <a href="../index.php"><img src="../img/logo.png" class="logo" /></a>
      </div>
      <section>
        <div class="form">
          <form action="../function/functions.php" method="POST">
            <div class="login">
              <h1>Confirm Email</h1> 
              <div class="input">
                <input type="text" placeholder="Email" name="email" class="email" required />
              </div>
              <div class="btn">
                <button type="submit" name="emailCon" class="btnlogin">Continue</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
  </body>
</html>
