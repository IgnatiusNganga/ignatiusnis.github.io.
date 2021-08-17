<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Interface</title>
    <link rel="stylesheet" href="sideStyle.css">
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
      <section align="center" class="indent" style="background-color: wheat; height: fit-content; width: 50%;">
        <P>
            <strong>WELCOME TO THE CUSTOMER INTERFACE</strong><br>
            Kindly enter your details below in order to begin the ordering process
        </P>
        <form class="customer" id="customer" action="customerSubmit.php" method="post">
        
            <label for = "first_name">First Name: </label>
            <input type="text" id="first_name" name="first_name" placeholder="First Name" value = "" required><br>
    
            <label for = "last_name">Last Name: </label>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" value = "" required><br>
    
            <label for = "PhoneNumber">Phone Number: </label>
            <input type="number" size=10 id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" value = "" required><br>
            
            
            <input type="submit" value="Submit to go to Menu">
        </form>  
           <!--{% if fname == null or fname == '' %}NO NAME CONTENT{% else %}WITH NAME CONTENT{% endif %}STATIC CONTENT-->
              
        
      </section>
    </div>
 
       <section style="height: 150px; width: 613px;">
      
       </section> 
      <section style="height: fit-content; width: 613px;">
        <nav style="font-size: 20px;">
            <a style="color: wheat;" href="homepage.php">HomePage</a>
       </nav>
      </section> 

      <footer align="center" style="padding-bottom: 10px;">
           
        <p>Reach us when you have any query? WHY NOT!</p>
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





