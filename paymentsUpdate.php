<?php
include "connect.php";


$Payment_ID = $_POST['Payment_ID'];
$Amount = $_POST['Amount'];
$Order_ID = $_POST['Order_ID'];
//$PaymentDate = $_POST['PaymentDate'];
//$password = $_POST['password'];
 
// Attempt insert query execution
$sql = "INSERT INTO payments ( Payment_ID, Amount, Order_ID) VALUES ('$Payment_ID', '$Amount', '$Order_ID')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
   header('Location: /project/payments.php');

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





