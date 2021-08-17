<?php
session_start();
require_once("connect.php");


//code for Cart
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($link,"SELECT * FROM menu WHERE MenuNumber='$pid'");
	          while($productByCode=mysqli_fetch_array($result)){
			$itemArray = array($productByCode["MenuNumber"]=>array('Food'=>$productByCode["Food"],'quantity'=>$_POST["quantity"], 'Price'=>$productByCode["Price"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode["MenuNumber"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["MenuNumber"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
            }
	}
	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["MenuNumber"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body class="main">
    <header id="Head">
	<script type="text/javascript">
    //alert('Your Customer ID number is');
	//document.getElementbyID "Customer_ID";
</script>  
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
      <section class="indent" style="background-color: black;height: fit-content; width: 70%;">
        <P style="color:white;">
            <strong >DEAR ESTEEMED CUSTOMER,WELCOME TO THE MENU</strong><br>
            YOU MAY ORDER ANYTHING YOU LIKE!!
        </P>
</section>
        
      

<section class="indent" style="background-color: wheat;height: fit-content; width: 70%;">






    
 <!-- Cart ---->
<div id="shopping-cart" style="background-color: greedn;">
<div class="txt-heading"><h3><u>Order cart </u></h3><br><i>(Kindly screenshot your order cart and upload it when you complete order)</i></div>

<a id="btnEmpty" href="menu.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Food</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["Price"];
		?>
				<tr>
				<td><?php echo $item["Food"]; ?></td>
				
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "Kshs. ".$item["Price"]; ?></td>
				<td  style="text-align:right;"><?php echo "Kshs. ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="menu.php?action=remove&code=<?php echo $item["MenuNumber"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["Price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Kshs. ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>









      <div id="product-grid" style="background-color: wheat;">
	<div class="txt-heading"></div>
	
	<?php
	
	$product= mysqli_query($link,"SELECT * FROM menu ORDER BY MenuNumber ASC");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
		
	?>
		<div class="product-item">
			<form method="post" action="menu.php?action=add&pid=<?php echo $row["MenuNumber"]; ?>">
			<div class="product-tile-footer">
			<div class="product-title">
     
      <?php echo $row["Food"]; ?>
			<?php echo "Kshs.".$row["Price"]; ?>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Order" class="btnAddAction" />
			</div>
			</form>
		</div>
	<?php
		}
	}  else {
 echo "No Records.";

	}
	?>
</div>
</div></section>




<div align="left">
        <section style="width: 50%; height: fit-content;">
        <nav>
            <a style="color: wheat; font-size: 20px;" href="OrderPage.php" >Complete Order</a> <br>
            <a style="color: wheat; font-size: 20px;" href="Customer.php">Customer Details</a><br>
            <a style="color: wheat; font-size: 20px;" href="homepage.php">Homepage</a><br>
           </nav>  
        </section> 
</div>


    
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