<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Data</title>
    <link rel="stylesheet" href="SideStyle.css">
</head>
<body class="main">
    <header id="Head">
        
      <h1 style="color: wheat; font-size: 40px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-style: inherit;">MURAGURI RESTAURANT SYSTEM</h1>
      <nav>
          <a href="homepage.php">
          <img class="logo "src="images/Restaurant 1.png" alt="Restaurant logo" align="right">
          <img class="logo "src="images/Restaurant 1.png" alt="Restaurant logo" align="left">
          </a>
          </nav>
          <h3 style="font-size: 40px; font-family: 'Courier New', Courier, monospace; font-style: oblique;">FOR BETTER CUSTOMER SERVICE</h3>
        
      </header>
 
    <div align="center">
      <section class="indent" style="background-color: wheat;height: fit-content; width: 100%;">
      <div align="right"><button class="print" onClick  ="window.print()">Print this page</button>
</div>
      <P>
            <strong>WELCOME </strong><br>
            YOU CAN VIEW CUSTOMERs' DATA HERE !!
        </P>
        
        <style>
        table {
        border-collapse: collapse;
        width: 100%;
        color: black;
        font-family: monospace;
        font-size: 100%%;
        text-align: center;
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
        <th>Customer ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Date and Time</th>
        
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "project");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Customer_Id, First_name,Last_name,PhoneNumber,Date FROM customer";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Customer_Id"]. "</td><td>" . $row["First_name"] . "</td><td>" . $row["Last_name"]. "</td><td>" . $row["PhoneNumber"]. "</td><td>" . $row["Date"]. "</td><td>"
        ;
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
        </table>
       
      </section>
    
    </div>
      <section style="width: 50%; height: fit-content;">
        <nav>
            <a style="color: wheat; font-size: 20px;" href="StaffMenu.html">Staff Menu Interface</a><br>
            <a style="color: wheat; font-size: 20px;" href="homepage.php">Homepage</a><br>
           </nav>  
      </section> 
    
      <footer align="center" style="padding-bottom: 10px;">
           
        <p>Reach us when you have any query? WHY NOT!
          <h3>Contact Information:</h3> Call me on: <u style="font-size: 20px; color: wheat;">+254713281469</u>
          <br>Or click below to reach me via; <br><br>
           <section class="FooterLinks">
              <a style="border: 3px solid black; color: black;" href="https://mail.google.com/mail/u/1/#inbox?compose=GTvVlcSPFrCTbBVrMjGmdTLjKbWzSdCgKHGBfbmVPBhvqJTBzmdrkwsGZxGkFtWqtzcWwvWPCFmxH" target="_blank">Email</a>
              <a style="border: 3px solid black; color: black;" href="https://www.facebook.com" target="_blank">Facebook</a>
              <a style="border: 3px solid black; color: black;" href="https://www.twitter.com" target="_blank">Twitter</a>
              <a style="border: 3px solid black; color: black;" href="https://www.instagram.com" target="_blank">Instagram</a>
           </section>
        </p>
      </footer>
</body>
</html>