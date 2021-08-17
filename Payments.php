<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments Interface</title>
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
              <h3 style="font-size: 40px; font-family: 'Courier New', Courier, monospace; font-style: oblique;">FOR BETTER CUSTOMER SERVICE</h3>
            
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
            <th>Payment ID</th>
            <th>Amount</th>
            <th>Order ID</th>
            <th>Payment Date</th>
            <th>FOR Customer ID</th>
            <th>Customer's Payment Status</th>
            
            
           
            
            
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "project");
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            //Payment_ID	Amount	Order_ID	PaymentDat
            $sql = "SELECT payments.*,orders.*,customer.* FROM orders join payments on orders.Order_ID = payments.Order_ID join customer on orders.Customer_ID = customer.Customer_ID";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Payment_ID"]. "</td><td>" . $row["Amount"] . "</td><td>" . $row["Order_ID"] . "</td><td>" .  $row["PaymentDate"]. "</td><td>" .  $row["Customer_ID"] . "</td><td>" .  $row["PaymentStatus"]
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
                <form class="payments" id="payments" action="paymentsUpdate.php" method="post">
        
        <h1>Kindly fill in the details below in order to:</h1><br><h4><i>a)Add Payment to the Database</i></h4>
        <label for = "Payment_ID">Payment ID: </label>
        <input type="number" id="Payment_ID" name="Payment_ID" placeholder="Payment_ID" ><i>(Optional)</i><br>

        <label for = "Amount">Amount: </label>
        <input type="number" id="Amount" name="Amount" placeholder="Amount" value = "" required><br>

        <label for = "Order_ID">Order ID: </label>
        <input type="number" minimum length=10 id="Order_ID" name="Order_ID" placeholder="Order_ID" value = "" required><br>
        
        
        

        <input type="submit" value="Submit">
    </form>  
                </p>
         </section>


        <section> 
         <h4><i>b)Delete payment from the Database</i></h4>
        <form method="POST" action="paymentDeleteScript.php" >
        <table>
        <col span="1" align="right">
<tr>
<td style="color:wheat; background-color: black;">Insert Payment ID to delete below:</font></td>
<td><input align="center" type="submit" value="Delete"></td>
</tr>
<tr>
<td><input type="number" name="Payment_ID" size=10></td></tr>
</table>
</form>

</section>

<section > 
                <p>
                <form class="staff" id="staff" action="paymentEdit.php" method="post">
        
        <h4><i>c)Edit payment Details</i></h4>
        <label for = "Payment_ID">Payment ID: </label>
        <input type="number" id="Payment_ID" name="Payment_ID" placeholder="Payment_ID" value = "" required><br>

        <label for = "Amount">Amount: </label>
        <input type="number" id="Amount" name="Amount" placeholder="Amount" value = "" required><br>

        <label for = "Order_ID">Order ID: </label>
        <input type="number" minimum length=10 id="Order_ID" name="Order_ID" placeholder="Order_ID" value = "" required><br>
        
        <label for = "PaymentDate">Payment Date: </label>
        <input type="date" id="PaymentDate" name="PaymentDate" placeholder="PaymentDate" value = "" required><br>

        
        <input type="submit" value="Edit">
    </form>  
    <form class="staff" id="staff" action="paymentStatusEdit.php" method="post">
        
        <h4><i>d)Edit customers' payment status</i></h4>
        <label for = "Customer_ID">Customer ID: </label>
        <input type="number" id="Customer_ID" name="Customer_ID" placeholder="Customer_ID" value = "" required><br>

        <label for = "PaymentStatus">Payment Status: </label>
        <input type="text" id="PaymentStatus" name="PaymentStatus" placeholder="PaymentStatus" value = "" required><br>


        
        <input type="submit" value="Edit">
    </form>
                </p>
         </section>



</div>



 
<section  style=" width: 50%; height: fit-content">
              <nav>
                <a style="color: wheat; background-color:black;" href="StaffMenu.html">Staff Interface</a>
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