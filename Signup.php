<?php
require("connection.php");

if (isset($_POST['register'])) {

  $sql = "INSERT INTO users( username , password ) VALUES (:username,:password)";
  $statment = $pdo->prepare($sql);
  $passowrd = $_POST['password'];
  $username = $_POST['username'];

  $statment->bindParam(":username", $username, PDO::PARAM_STR);
  $statment->bindParam(":password", $passowrd, PDO::PARAM_STR);

  $statment->execute();
  $pdo = null;
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegistrationStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">s
    <title>Sign Up</title>
</head>
<body>
    <form action="" method="POST">
        <div class="reg-container"> 
        <h2>Create an Account</h2>
          <label for="username"><b>Username </b></label>
          <input type="text" placeholder="Enter Username" name="username"  required>
          <label for="password"><b>Password </b></label>
          <input type="password" placeholder="Enter Password" name="password"  required> 
          <button type="submit" name="register"> Register </button>
          
          <label for="login" id="login">Already have an Account?</label>
          <a  class="reg-link" href="Login.php" name="login"> Login Here </a>
        </div>
      </form>
</body>
</html>