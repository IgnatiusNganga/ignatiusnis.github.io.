<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    <link rel="stylesheet" href="divisionStyle.css">
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
          <h3 style="font-size: 40px; font-family: 'Courier New', Courier, monospace; font-style: oblique;">FOR BETTER CUSTOMER SERVICE</h3>
        
      </header>
      </div>
      
  <div id="sec1">
    <section style="background-color:wheat ;">
      <h3>Upload your screenshot below</h3> 
      <form method="POST" action="image.php" enctype="multipart/form-data">
      <label for = "Customer_ID">Customer ID: </label>
        <input type="number" id="Customer_ID" name="Customer_ID" placeholder="Customer_ID" value = "" required><br>

      
        <input type="file" name="myimage">
        <input type="submit" name="submit" value="Upload">
       </form>
      
      
    </section>
    
    <section class="indent" style="background-color: wheat; height: fit-content; width: 90%; padding-bottom: 10px;">
        <P>
            <strong>YOU CAN NOW PAY TO COMPLETE YOUR ORDER</strong><br>
            Kindly pay using the details below
        </P>
        <p><u><b>FOR MPESA</b></u><br> Paybill Number: 123456<br>Account Number:<i>(input your name)</i><br> Input the total amount of the order<br>Input your password</p>
        <p><u><b>FOR PAYPAL</b></u><br>Click Send and Request at the top of the page<br>Select you are paying for goods and services<br>Enter our phone number<i>(+254713281469)</i>and the amount<br>Choose payment type and click Continue<br>Review details<br>Click Continue<br>Review your payment and click Send Money</p>  
        <!--{% if fname == null or fname == '' %}NO NAME CONTENT{% else %}WITH NAME CONTENT{% endif %}STATIC CONTENT-->
        <section >
          <nav>
            <a style="color: black; font-size: 20px;" href="Menu.php" >Menu</a><br>
            <a style="color: black; font-size: 20px;" href="homepage.php">Homepage</a>
        </nav>    
</section>   
    </section>
           <section style="height: 20%;">

           </section>
           
  </div>
   
  <div id="sec2">
      <section id="imani" align="center">
              <a href="#"><img align="center" src="images/customer.jpg" height = "60%" width = "60%" alt="Customer"></a>
      </section>
      <section align="center" style="border: 3px solid black; background-color: wheat; height: fit-content; width: 100%;">
      <!--<p>Click <a href="CustomerIDData.php">here</a> to view Customer IDs.</p> -->   
      <h3><i>Payment status</i></h3>

              <i>Payment status will appear once confirmed by a staff member<br></i>

 
         
            <form method="get" action="paymentStatus.php" >
        <table>
        <col span="1" align="right">
<tr>
<td style="color:wheat; background-color: black;">Insert your Customer ID to view your status:</font></td>
<td><input align="center" type="submit" value="Request Payment Status"></td>
</tr>
<tr>
<td><input type="number" name="Customer_ID" size=10></td></tr>
</table>
</form>

            
            </table>
           
          </section>
        
        </div>
              <p>       </p><br>
              <p>       </p>
              
      </section> 
  </div>
  <div style="width: 100%;">
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
