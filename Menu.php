<?php
require 'connection.php';

if(isset($_POST['aside1'])){
    $sql = 'SELECT id FROM cart WHERE ordername = :name';
    $statement = $pdo->prepare($sql);
  
    $name ='Classic Carbonara';
    $statement->bindParam(":name", $name, PDO::PARAM_STR);
  
    $statement->execute();
    $count = $statement->rowCount();
  
    if ($count == 0) {
      $sql = "INSERT INTO cart (ordername,	price,	quantity) values (:ordername, :price , :quantity)";
      $statement = $pdo->prepare($sql);
  
        $price = 9.0;
        $quantity = $_POST['qtn'] ;
  
      $statement->bindParam(":ordername", $name, PDO::PARAM_STR);
      $statement->bindParam(":price", $price, PDO::PARAM_STR);
      $statement->bindParam(":quantity", $quantity, PDO::PARAM_STR);
      
  
      $statement->execute();
      echo "Successfully added, check it in your cart";
    } else {
      echo "Item already in the cart";
    }
    $pdo = null;
  }


    

  if(isset($_POST['aside2'])){
    $sql = 'SELECT id FROM cart WHERE ordername = :name';
    $statement = $pdo->prepare($sql);
  
    $name ='Heart Pizza';
    $statement->bindParam(":name", $name, PDO::PARAM_STR);
  
    $statement->execute();
    $count = $statement->rowCount();
  
    if ($count == 0) {
      $sql = "INSERT INTO cart (ordername,	price,	quantity) values (:ordername, :price , :quantity)";
      $statement = $pdo->prepare($sql);
  
        $price = 9.0;
        $quantity = $_POST['qtn'] ;
  
      $statement->bindParam(":ordername", $name, PDO::PARAM_STR);
      $statement->bindParam(":price", $price, PDO::PARAM_STR);
      $statement->bindParam(":quantity", $quantity, PDO::PARAM_STR);
      
  
      $statement->execute();
      echo "Successfully added, check it in your cart";
    } else {
      echo "Item already in the cart";
    }
    $pdo = null;
  }


  if(isset($_POST['aside3'])){
    $sql = 'SELECT id FROM cart WHERE ordername = :name';
    $statement = $pdo->prepare($sql);
  
    $name ='Lasgna';
    $statement->bindParam(":name", $name, PDO::PARAM_STR);
  
    $statement->execute();
    $count = $statement->rowCount();
  
    if ($count == 0) {
      $sql = "INSERT INTO cart (ordername,	price,	quantity) values (:ordername, :price , :quantity)";
      $statement = $pdo->prepare($sql);
  
        $price = 9.0;
        $quantity = $_POST['qtn'] ;
  
      $statement->bindParam(":ordername", $name, PDO::PARAM_STR);
      $statement->bindParam(":price", $price, PDO::PARAM_STR);
      $statement->bindParam(":quantity", $quantity, PDO::PARAM_STR);
      
  
      $statement->execute();
      echo "Successfully added, check it in your cart";
    } else {
      echo "Item already in the cart";
    }
    $pdo = null;
  }


  if(isset($_POST['aside4'])){
    $sql = 'SELECT id FROM cart WHERE ordername = :name';
    $statement = $pdo->prepare($sql);
  
    $name ='Gelato';
    $statement->bindParam(":name", $name, PDO::PARAM_STR);
  
    $statement->execute();
    $count = $statement->rowCount();
  
    if ($count == 0) {
      $sql = "INSERT INTO cart (ordername,	price,	quantity) values (:ordername, :price , :quantity)";
      $statement = $pdo->prepare($sql);
  
        $price = 9.0;
        $quantity = $_POST['qtn'] ;
  
      $statement->bindParam(":ordername", $name, PDO::PARAM_STR);
      $statement->bindParam(":price", $price, PDO::PARAM_STR);
      $statement->bindParam(":quantity", $quantity, PDO::PARAM_STR);
      
  
      $statement->execute();
      echo "Successfully added, check it in your cart";
    } else {
      echo "Item already in the cart";
    }
    $pdo = null;
  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Menu </title>
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "container">
        <header class = "header">
            <div class="headerParagraph">
                <img src="Zairestau-Logo.png" alt="Zairestau-Logo">
            </div>
            <h2> Our Menu </h2>
            <p>The best Italian dishes are on our menu...</p>
            <a href="cart.php"> <i class="fa fa-cart-arrow-down" style="font-size:22px"></i> CART </a>
        </header>
        <aside class="aside aside1">
            <form action="" method="post">
            <h3> Classic Carbonara </h3>
                <img src="Classic Carbonara.jpg" alt="Carbonara">
                <p>fresh egg yolks, aged Pecorino Romano cheese, guanciale
                    <br> Price: 9.00$
                </p>
                <input type="number" name="qtn">
                <input type="submit" name="aside1" value = "Add To Your Cart">
                
            </form>
        </aside>
        <aside class="aside aside2">
            <form action="" method="post">
            <h3> Pizza Peperoni Heart </h3>
                <img src="Pizza Heart.jpg" alt="HearPizza">
                <p>mozzarella, peperoni hearts, basil, fresh mint, mental cheese
                    <br> Price: 10.00$
                </p>
                <input type="number" name="qtn">
                <input type="submit" name="aside2" value = "Add To Your Cart">
            </form>
        </aside>
        <aside class="aside aside3">
            <form action="" method="post">
            <h3> Burrata Lasagna </h3>
            <img src="Lasgna.jpg" alt="Lasagna">
            <p> tomato paste, prime beef, fresh rosemary, carrots 
                <br> Price: 12.00$
            </p>
            <input type="number" name="qtn">
            <input type="submit" name="aside3" value = "Add To Your Cart">
            </form>
        </aside>
        <aside class="aside aside4">
            <form action="" method="post">
            <h3> Portofino's Gelato Sundae </h3>
            <img src="Gelato.jpg" alt="melon">
            <p>strawberry gelato, chocolate gelato, fresh cream, glazed Amarena cherries and blueberries strawberries
                <br> Price: 9.00$
            </p>
            <input type="number" name="qtn">
            <input type="submit" name="aside4" value = "Add To Your Cart">
            </form>
        </aside>
    </div>
</body>
</html>