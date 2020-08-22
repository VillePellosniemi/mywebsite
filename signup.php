<?php
  require 'header.php';
?>

<main>
  <h1>Signup</h1>
  <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields") {
        echo '<p class="error">Fill in all the fields!</p>';
      }
      else if ($_GET['error'] == "invaliduidmail") {
        echo '<p class="error">Invalid username and email!</p>';
      }
      else if ($_GET['error'] == "invaliduid") {
        echo '<p class="error">Invalid username!</p>';
      }
      else if ($_GET['error'] == "invalidmail") {
        echo '<p class="error">Invalid email!</p>';
      }
      else if ($_GET['error'] == "passwordcheck") {
        echo '<p class="error">Your passwords do not match!</p>';
      }
      else if ($_GET['error'] == "usertaken") {
        echo '<p class="error">Username is already taken!</p>';
      }
    }
    else if ($_GET['signup'] == "success") {
      echo '<p class="success">Signup successful!</p>';
    }
  ?>
  <form action="includes/signup.inc.php" method="post">
    <div class="form-element">
      <label>Username</label>
      <input type="text" name="uid">
    </div>
    <div class="form-element">
      <label>Email</label>
      <input type="text" name="mail">
    </div>
    <div class="form-element">
      <label>Password</label>
      <input type="password" name="pwd">
    </div>
    <div class="form-element">
      <label>Repeat Password</label>
      <input type="password" name="pwd-repeat">
    </div>
    <button type="submit" name="signup-submit">Signup</button>
  </form>
</main>

<?php
  require 'footer.php';
 ?>
