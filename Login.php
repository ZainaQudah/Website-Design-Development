<?php
session_start();
require("connection.php");

if(isset($_POST['signin'])){
    $sql="SELECT * from users where username=:username AND password=:password";
    $statement=$pdo->prepare($sql);
    $username=$_POST['username'];
    $password=$_POST['password'];

    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['validate']=$username;
        header("location:Zairestau.php");
    }else{
        echo "Invalid username or password";
    }
    $pdo=null;

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegistrationStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Sign In</title>
</head>
<body>
    <form action="" method="POST">
        <div class="login-container"> 
        <h2> Enter Your Information </h2>
          <label for="username"><b> Username </b></label>
          <input type="text" placeholder="Enter Username" name="username"  required>
          <label for="password"><b> Password </b></label>
          <input type="password" placeholder="Enter Password" name="password"  required> 
          <button  id="signin" type="submit" name="signin"> Sign In </button>
          
          <label for="register" id="register">You don't have an Account?</label>
          <a  class="reg-link" href="Signup.php" name="register"> Create New Account </a>
        </div>
      </form>
</body>
</html>