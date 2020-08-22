<?php
  session_start();
 ?>
<DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="example">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav>
        <div>
          <?php
          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
          }
          else {
            echo '<form action="includes/login.inc.php" method="post">
                    <div class="form-element">
                      <label>Username/Email</label>
                      <input type="text" name="mailuid">
                    </div>
                    <div class="form-element">
                      <label>Password</label>
                      <input type="password" name="pwd">
                    </div>
                    <button type="submit" name="login-submit">Login</button>
                    </form>
                  <a href="signup.php">Sign up!</a>';
          }
          ?>
        </div>
      </nav>
    </header>
