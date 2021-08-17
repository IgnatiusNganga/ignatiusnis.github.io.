<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Management Interface</title>
    <link rel="stylesheet" href="SideStyle.css">
</head>
<body class="main">
<div style="width: 100%; height: 30%;">   
<header id="Head">
        
          <h1 style="color: wheat; font-size: 40px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-style: inherit;">MURAGURI RESTAURANT SYSTEM</h1>
          <nav>
          <a href="homepage.php">
          <img class="logo "src="images/Restaurant 1.png" alt="Restaurant logo" align="right">
          <img class="logo "src="images/Restaurant 1.png" alt="Restaurant logo" align="left">
          </a>
          </nav>
          <h3 style="font-size: 40px; font-style: oblique; font-family: 'Courier New', Courier, monospace;">WELCOME TO THE MENU MANAGEMENT INTERFACE</h3>
        
      </header>
      </div>
     
     
     <section style="height:30px;"></section>
     <div style="float:right;
  height: fit-content;
  width: 50%;
  background-color:wheat;">  
          
             <section> 
                    
                    <form class="menu" id="menu" action="MenuUpdate.php" method="post">
            <h1>Kindly fill in the details below in order to:</h1><br><h4><i>a)Add a dish to the Database</i></h4>
            <label for = "Food">Food: </label>
            <input type="text" id="Food" name="Food" placeholder="Food" value = "" required><br>
    
            <label for = "Price">Price: </label>
            <input type="text" id="Price" name="Price" placeholder="Price" value = "" required><br>
    
        
    
            <input type="submit" value="Submit">
        </form>  
                   
             </section>
   
             <section> 
         <h4><i>b)Delete a dish from the Database</i></h4>
        <form method="POST" action="delete_script.php" >
        <table>
        <col span="1" align="right">
<tr>
<td style="color:wheat; background-color: black;">Insert MenuNumber to delete below:</font></td>
<td><input align="center" type="submit" value="Delete"></td>
</tr>
<tr>
<td><input type="number" name="MenuNumber" size=10></td></tr>
</table>
</form>

</section>

         <section> 
         <h4><i>c)Edit a dish from the Database</i></h4>
        
        <form class="menu" id="menu" action="MenuEdit.php" method="post">
            
            <label for = "MenuNumber">MenuNumber: </label>
            <input type="number" id="MenuNumber" name="MenuNumber" placeholder="MenuNumber" value = "" required><br>

            <label for = "Food">Food: </label>
            <input type="text" id="Food" name="Food" placeholder="Food" value = "" required><br>
    
            <label for = "Price">Price: </label>
            <input type="text" id="Price" name="Price" placeholder="Price" value = "" required><br>
    
        
    
            <input type="submit" value="Edit">
        </form>  


</section>

</div>



<div style="
  height: 450px;
  width: 40%;
  background-color:wheat;">
  <section>
    <P align="center">
        <strong>WELCOME </strong><br>
        THIS IS THE CURRENT MENU !!
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
    <th>MenuNumber</th>
    <th>Food</th>
    <th>Price</th>
    
    
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "project");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["MenuNumber"]. "</td><td>" . $row["Food"] . "</td><td>" . $row["Price"]
    ;
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
   
  </section>

</div>

       
         <section>
          <nav>
            <a style="color:wheat; background-color:black;" href="ManagerMenu.html">Manager Interface</a>
           </nav>
         </section>





  

<div>

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
  </div>
</body>
</html>
