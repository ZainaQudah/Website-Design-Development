<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="menu2.css"></link>

    <style>
        body {
            background-color: #3a2e2d;
            padding: 0px; 
        }
        th,td{
            border-bottom: 1px solid #ddd;
            background-color:  #c4bba7;
            border-radius: 15px;
            
        }
        tr:hover {

            background-color: #d3d3dd;
        }
        header img {
            margin-top: 1px;
            height: 80%;
            width: 20%;
            margin-left: 620px;
        }

        header h1{

            text-align:center;
            font-size: 50px;
            color:#dbd2d1;
        }
      
    </style>
</head>
<body>

        <header class="header">
         
            <img src="Zairestau-Logo.png" alt="Zairestau-Logo">
            <h1> Your Cart </h1>

        </header>



        <?php 
        require 'connection.php'; 
        $sql = 'SELECT * FROM cart';
        $statement=$pdo->prepare($sql);
        $statement->execute();
        $counter=$statement->rowCount();

        echo "<table style='border:0px solid  ; width:80%; text-align:center; margin:auto;'>";
        echo "<tr>";
        echo "<th> Item </th>";
        echo "<th> Price </th>";
        echo "<th> Quantity </th>";
        // echo "<th> Edit </th>";
        echo "<th> Delete </th>";
        echo "</tr>";
        $data=$statement->fetchAll();

        foreach($data as $row){
       
                
            echo "<tr>". 
            "<td>" . $row['ordername']."</td>". 
            "<td>" . $row['price']."</td>".
            "<td>" . $row['quantity']."</td>".
           "<td> <a href=delete.php?id=".$row['id']."> delete </a> </td>".
            "</tr>";
           
           

        }

        echo "</table>";
        $pdo=null; 
    ?>

</body>
</html>


