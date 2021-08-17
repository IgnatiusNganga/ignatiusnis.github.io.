<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
</head>
<body align="center"style="background-image:url('images/blur3.jfif');">
    <h2 style="font-size:50px;color:black;background-color:wheat; width: fit-content;">Your Payment Status is: </h2>
<div align="center">
    <section align="center"style="font-size:50px;color:wheat;background-color:black; height: 350px; width: 400px ;">
<?php
            $conn = mysqli_connect("localhost", "root", "", "project");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            $Customer_ID = $_GET['Customer_ID'];
            //$Price = $_POST['Price'];

 
             // Attempt insert query execution
            $sql = "SELECT PaymentStatus FROM `customer` WHERE `customer`.`Customer_ID` = $Customer_ID" ;
           
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               
            echo "<tr><td>" . $row["PaymentStatus"];//"</td><td>" . $row["First_name"] . "</td><td>" . $row["Last_name"]. "</td><td>" . $row["PhoneNumber"]. "</td><td>" . $row["Date"]. "</td><td>"
            ;
            }
            echo "</table>";
           } else { echo "No records"; }
            $conn->close();
            ?>
           </section>
        </div>
        <section style="background-color:wheat; color:black; width: fit-content;">
             <p>If APPROVED kindly wait for twenty(20) minutes while your order is being prepared.<br><i>👌👌Thank you for choosing Muraguri Restaurant👌👌</i></p><br>
            <p>If NOT YET APPROVED kindly wait for your order to be approved.<br>If delayed for more than five(5) minutes contact +254713281469 for assistance<p>
</section>
        <section align="left" style="background-color:wheat; color:black;" >
          <nav>
            <a style="color: black; font-size: 20px;" href="OrderPage.php" >Order Page</a><br>
            <a style="color: black; font-size: 20px;" href="homepage.php">Finish Process</a>
        </nav>    
</section>   
</body>
</html>

