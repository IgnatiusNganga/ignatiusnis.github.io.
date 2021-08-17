
<?php
include "connect.php";


//$Payment_ID = $_POST['Payment_ID'];
//$Amount = $_POST['Amount'];
//$Order_ID = $_POST['Order_ID'];
//$PaymentDate = $_POST['PaymentDate'];
$Customer_ID = $_POST['Customer_ID'];
$PaymentStatus = $_POST['PaymentStatus'];

// Attempt insert query execution

$sql ="UPDATE `customer` SET  `PaymentStatus` = '$PaymentStatus'/*, `Amount` = '$Amount' , `Order_ID` = '$Order_ID' , `username` = '$username', `password` = '$password'*/ WHERE `customer`.`Customer_ID` = $Customer_ID";
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

