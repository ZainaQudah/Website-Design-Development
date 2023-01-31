<?php
require 'connection.php';
$sql="DELETE FROM cart WHERE id=:id";
$id=$_GET['id'];
$statement=$pdo->prepare($sql);
$statement->bindParam(":id",$id, PDO::PARAM_INT);
$statement->execute();
header("Location:cart.php");
$pdo=null;