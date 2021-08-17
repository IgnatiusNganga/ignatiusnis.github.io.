<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Management Interface</title>
    <link rel="stylesheet" href="SideStyle.css">
</head>
<body class="main">
<div align="center">          
<header id="Head">
           
              <h1 style="color: wheat; font-size: 40px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  font-style: inherit;">MURAGURI RESTAURANT SYSTEM</h1>
              <nav>
              <a href="homepage.php">
              <img class="logo "src="images/Restaurant 1.png" alt="Restaurant logo" align="right">
              <img class="logo "src="images/Restaurant 1.png" alt="Restaurant logo" align="left">
              </a>
              </nav>
              <h3 style="font-size: 40px; font-family: 'Courier New', Courier, monospace; font-style: oblique;">WELCOME TO THE STAFF MANAGEMENT INTERFACE</h3>
            
            </header>
          
           </div>
           <section style="height:30px;"></section>

           <div style="background-color:wheat; width: 40%; height: 450px; float:right;">
          
          <section style="background-color:wheat; width:100%;">
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
            <th>Staff ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>PhoneNumber</th>
            <th>DateHired</th>
            <th>Username</th>
           
            
            
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "project");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM staff";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Staff_ID"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["Role"] . "</td><td>" .  $row["PhoneNumber"] . "</td><td>" . $row["DateHired"] . "</td><td>" . $row["username"] 
            ;
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>
            </table>
           
          </section>
          </section>
        </div>

         <section style="height:30px;"></section>

<div  style="background-color:wheat; width:40%; height: fit-content;">
         <section > 
                <p>
                <form class="staff" id="staff" action="StaffUpdate.php" method="post">
        
        <h1>Kindly fill in the details below in order to:</h1><br><h4><i>a)Add a Staff Member to the Database</i></h4>
        <label for = "Name">Name: </label>
        <input type="text" id="Name" name="Name" placeholder="Name" value = "" required><br>

        <label for = "Role">Role: </label>
        <input type="text" id="Role" name="Role" placeholder="Role" value = "" required><br>

        <label for = "PhoneNumber">Phone Number: </label>
        <input type="number" minimum length=10 id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" value = "" required><br>
        
        <label for = "username">username: </label>
        <input type="text" id="username" name="username" placeholder="username" value = "" required><br>

        <label for = "password">Password: </label>
        <input type="password" id="password" name="password" placeholder="password" value = "" required><br>


        <input type="submit" value="Submit">
    </form>  
                </p>
         </section>


         <section> 
         <h4><i>b)Delete a staff member from the Database</i></h4>
        <form method="POST" action="StaffDeleteScript.php" >
        <table>
        <col span="1" align="right">
<tr>
<td style="color:wheat; background-color: black;">Insert STAFF ID to delete below:</font></td>
<td><input align="center" type="submit" value="Delete"></td>
</tr>
<tr>
<td><input type="number" name="STAFF_ID" size=10></td></tr>
</table>
</form>

</section>

<section > 
                <p>
                <form class="staff" id="staff" action="StaffEdit.php" method="post">
        
        <h4><i>c)Edit a Staff Member's Details</i></h4>
        <label for = "Staff_ID">Staff_ID: </label>
        <input type="text" id="Staff_ID" name="Staff_ID" placeholder="Staff_ID" value = "" required><br>


        <label for = "Name">Name: </label>
        <input type="text" id="Name" name="Name" placeholder="Name" value = "" required><br>

        <label for = "Role">Role: </label>
        <input type="text" id="Role" name="Role" placeholder="Role" value = "" required><br>

        <label for = "PhoneNumber">Phone Number: </label>
        <input type="number" minimum length=10 id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" value = "" required><br>
        
        <label for = "username">username: </label>
        <input type="text" id="username" name="username" placeholder="username" value = "" required><br>

        <label for = "password">Password: </label>
        <input type="password" id="password" name="password" placeholder="password" value = "" required><br>


        <input type="submit" value="Edit">
    </form>  
                </p>
         </section>



</div>



 
<section  style=" width: 50%; height: fit-content">
              <nav>
                <a style="color: wheat; background-color:black;" href="ManagerMenu.html">Manager Interface</a>
               </nav>
             </section>
          



<section style="height:30px;"></section>

          <div style="width:100% height:100%;">
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