<?php
include "connect.php";


$Customer_ID = $_POST['Customer_ID'];
//$Amount = $_POST['Amount'];
//$Order_ID = $_POST['Order_ID'];
//$PaymentDate = $_POST['PaymentDate'];

 
// Attempt insert query execution

$sql ="UPDATE `orders` SET  `Customer_ID` = '$Customer_ID' /*, `Amount` = '$Amount' , `Order_ID` = '$Order_ID' , `username` = '$username', `password` = '$password'*/ WHERE `orders`.`Payment_ID` = $Payment_ID";
//$result=mysql_query($sql);
if(mysqli_query($link, $sql)){
    echo "Records edited successfully.";
   
  
    header('Location: /project/payments.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>