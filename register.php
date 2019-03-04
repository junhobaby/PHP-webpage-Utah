<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Registration Page</h2>

    <a href="index.php">Click here to go back</a>
    <form class="" action="register.php" method="post">
      Username: <input type="text" name="username" required="required"><br>
      Password: <input type="password" name="password" required="required">
      <input type="submit" name="" value="register">

        </form>
  </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  // assign username and password variables
  $username = $_POST['username'];
  $password = $_POST['password'];

// print username and password values
  echo "Username entered is:" . $username . "</br>";
  echo "Password entered is:" . $password;

  //connect to the database
  mysql_connect("localhost", "root", "") or die(mysql_error());
  mysql_select_db("first_db") or die(mysql_error());

  $query = mysql_query("SELECT * FROM users");
  mysql_query("INSERT INTO users(username, password) VALUES ('$username', '$password')");
}
?>
