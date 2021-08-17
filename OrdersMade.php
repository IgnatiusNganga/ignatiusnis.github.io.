<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Made</title>
    <link rel="stylesheet" href="SideStyle.css">

</head>
<body class="main">
  
<section style="width: 50%; height: fit-content; background-color:wheat;">
        <nav>
            <a style="color: black; font-size: 40px;" href="StaffMenu.html">Staff Menu Interface</a><br>
            <a style="color: black; font-size: 40px;" href="homepage.php">Homepage</a><br>
           </nav>  
      </section> 

<div style="
  height: 20%;
  width: 100%;
  background-color:wheat;">
  <section>
    <P align="center">
        <strong>WELCOME </strong><br>
        THESE ARE THE ORDERS MADE !!
    </P>
    
    <style>
    table {
    border-collapse: collapse;
    width: 1200px;
    color: black;
    font-family: monospace;
    font-size: 100%%;
    text-align: center;
    background-color: wheat;
    }
    th {
    background-color: black;
    color: wheat;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
    </style>
    </head>
    <body>
    <table>
    <tr>
    <th>Order_ID</th>
    <th>OrderDate</th>
    <th>OrderImage</th>
    <th>Customer ID</th>
    
    
    </tr>
   
    <?php
    $conn = mysqli_connect("localhost", "root", "", "project");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Order_ID , uploaded_on,OrderImage,OrderN,Customer_ID FROM orders ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Order_ID"]. "</td><td>" . $row["uploaded_on"] . "</td><td>" . $row["Customer_ID"];
    //echo 'img src="data:image/jpeg/png/jpg;charset=utf8;base64,'.base64_encode( $row['OrderImage']; "'
   // echo '<img src="data:image/jpeg/png/jpg;charset=utf8;base64,'.base64_encode( $row['OrderN'] ).'"/>';
    echo '<img src="data:image/jpeg/png/jpg;charset=utf8;base64,'.base64_encode( $row['OrderImage'] ).'"/>';
    //echo "</td><td>" . $row["Customer_ID"];
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
  </section>
 

</div>
</body>
</html>