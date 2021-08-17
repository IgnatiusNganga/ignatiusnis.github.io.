<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer ID</title>
</head>
<body>
<h4>Kindly remember your Customer ID for future use</h4>
<h1>YOUR CUSTOMER ID IS :</h1>
<section style="font-size: 100px">
<?php
include "connect.php";


$yes = "SELECT Customer_ID FROM customer where Date= NOW()";
            
//echo "Your Customer ID is ";            
            $result = $link->query($yes);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Customer_ID"];}
            echo "</table>";
            } else { echo "0 results"; }

            ?>
            </section>
            <h4>Click <a href="menu.php">here</a> to proceed to menu</h4>
</body>
</html>


